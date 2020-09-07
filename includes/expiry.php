<?php  
include "core.inc.php";
require "smsFunction.php";

$output = "";
$queryDb = "SELECT * FROM `drug_table`";
$query = mysqli_query($conn, $queryDb);
$arr = [];
while ($row = mysqli_fetch_array($query)) {
	$id = $row['drug_id'];
	$current_date = time(); //gets the current date and time
	$ex_date = $row['expiry_date']; //expiry date from the database
	$Expire_day = strtotime($ex_date);
	$dateDiff = $Expire_day - $current_date;
	$countdown = round($dateDiff / (60 * 60 * 24));

	if ($current_date > $Expire_day) {
		$arr[]=['status'=>'0','id'=>$id];
		$update1 = mysqli_query($conn, "UPDATE `drug_table` SET `status`= 0 WHERE `drug_id`= $id");
	}elseif ($countdown <=  90) {
		$arr[]=['status'=>'1','id'=>$id];
		$update2 = mysqli_query($conn, "UPDATE `drug_table` SET `status`= 1 WHERE `drug_id`= $id");
	}elseif ($countdown > 90) {
		$arr[]=['status'=>'2','id'=>$id];
		$update3 = mysqli_query($conn, "UPDATE `drug_table` SET `status`= 2 WHERE `drug_id`= $id");
	}
	//This function sends sms to admin mobile
	if ($countdown == 90 || $countdown == 180) {
		$phoneNo = "+2348096226407";
		$msg = "Hello, Some of your drugs are expiring soon! Please kindly log on to your Dashboard to see which drugs are expiring";
		 sendsms($phoneNo, $msg);
		//run a functixon
	}

}
echo json_encode($arr);
?>