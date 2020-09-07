<?php
	include "../admin/session.php";

	function check_input($data) {
		require 'connect.php';

		$data = mysqli_real_escape_string($conn, $data);
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function batchList(){
		require "connect.php";
					$select=mysqli_query($conn,"select * from batch left join admin on batch.admin_id=admin.id");
					$id = 1;
					while($query_row=mysqli_fetch_array($select)){
						$b_id=$query_row['b_id'];
						//batch id to delete;
					?>
						<tr><td><?php echo $id++; ?></td>
							<td><?php echo $query_row['Batch_Name']; ?></td>
							<td><?php echo $query_row['firstname']." ".$query_row['lastname']; ?></td>
							<td><?php echo $query_row['date']; ?></td>
							<td>
								<a class="btn btn-danger btn-sm" href="../admin/deleteBatch.php?clicked=<?php echo $b_id; ?>" id="<?php echo $b_id; ?>">Remove</a>
								<?php include('user_button.php'); ?>
							</td>
						</tr>
<?php		}
	}

	function selectBatch(){
		require 'connect.php';

		$batch=mysqli_query($conn,"select * from batch");
		while($batchrow=mysqli_fetch_array($batch)){
			$batch_id = $batchrow['b_id'];
			?>
		<option value="<?php echo $batch_id; ?>"><?php echo $batchrow['Batch_Name']; ?>
			
		</option>
	<?php
		}
	}

	function selectDrug(){
		require 'connect.php';

		$drug=mysqli_query($conn,"select * from drug_table");
		while($drugrow=mysqli_fetch_array($drug)){
			$drug_id = $drugrow['drug_id'];
			?>
		<option value="<?php echo $drug_id; ?>"><?php echo $drugrow['drug_name']; ?>
			
		</option>
	<?php
		}
	}

	function select_customer(){
		require 'connect.php';

		$query = mysqli_query($conn,"select * from distribution_center");
		while($row=mysqli_fetch_array($query)){
			$id = $row['id'];
			?>
		<option value="<?php echo $id; ?>"><?php echo $row['Name']; ?>
			
		</option>
	<?php
		}
	}
	
	
	function DistributionCenter(){
		require "connect.php";
					$select=mysqli_query($conn,"select * from distribution_center");
					$id = 1;
					while($query_row=mysqli_fetch_array($select)){
						$b_id=$query_row['id'];
						//batch id to delete;
					?>
						<tr><td><?php echo $id++; ?></td>
							<td><?php echo $query_row['Name']; ?></td>
							<td><?php echo $query_row['Location']; ?></td>
							<td><?php echo $query_row['Contact_info']; ?></td>
							<td>
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editcustomer_<?php echo $b_id; ?>"><i class="fa fa-edit"></i> Update</button>
								<button class="btn btn-danger btn-sm del_center" data-toggle="modal" data-target="#del_<?php echo $b_id; ?>"><i class="fa fa-trash"></i> Delete</button>
								<?php include('user_button.php'); ?>
							</td>	
						</tr>
<?php		}
	}

	function DrugList(){
		require 'connect.php';
		$pq=mysqli_query($conn,"select * from drug_table left join batch on batch.b_id=drug_table.batch_id where evaluation='normal' or evaluation='refurbished'");
				$id = 1;
					while($pqrow=mysqli_fetch_array($pq)){
						$pid=$pqrow['drug_id'];

						$status = $pqrow['status'];
                        $comment = $pqrow['comment'];
					?>
						<tr>
							<td><?php echo $id++; ?></td>
							<td><?php echo $pqrow['drug_name']; ?></td>
							<td><?php echo $pqrow['description']; ?></td>
							<td><?php echo $pqrow['Batch_Name']; ?></td>
							<td><a class="btn btn-sm" data-toggle="modal" data-target="#editprod_<?php echo $pid; ?>"><i class="fa fa-search"></i> Scan Code</a></td>
							<td><?php echo $pqrow['prod_date']; ?></td>
							<td><?php echo $pqrow['expiry_date']; ?></td>
							<td><?php echo $pqrow['qty']; ?></td>
							<td>#<?php echo $pqrow['price']; ?></td>
							<td id="status-<?php echo $pid;?>"><?php if ($status == 0) {
								echo "<span style='font-weight:bold; color:red'>Drug expired!</span>";
							}elseif ($status == 1) {
								echo "<span style='font-weight:bold; color:orange'>Expiring Soon!</span>";
							}else{
								echo "<i class='fa fa-check' style='color:green'></i>";
							} ?></td>
							<td>
								<?php if ($status ==0) { ?>
								<button class="btn btn-success btn-sm evaluate" id="<?php echo $pid; ?>"><i class="fa fa-history"></i> Evaluate</button>
							<?php }else{  ?>
								<button class="btn btn-success disabled btn-sm"><i class="fa fa-history"></i> Evaluate</button>
								<?php 
                                       if(!empty($comment)){
                                           echo "View Comment"; ?><a data-toggle="modal" data-target="#view_<?php echo $pid; ?>"><i class='fa fa-eye'></i> Newly refurbished</a>
                                     <?php  }
                                       } include('product_button.php'); ?>
							</td>
						</tr>
					<?php
					}
	}

		function expireDrugs(){
		require "connect.php";
					$select=mysqli_query($conn,"select * from drug_table where status= 0");
					$id = 1;
					while($query_row=mysqli_fetch_array($select)){
						$eid=$query_row['drug_id'];
						//batch id to delete;
					?>
						<tr><td><?php echo $id++; ?></td>
							<td style="color: red;font-weight: bold;"><?php echo $query_row['drug_name']; ?></td>
							<td><?php echo $query_row['qty']; ?></td>
								
						</tr>
<?php		}
	}

	function count_batch(){
		require "connect.php";
			$batch_query = mysqli_query($conn, "SELECT * FROM batch");
			$row_count = mysqli_num_rows($batch_query);
			echo $row_count;
	}
?>