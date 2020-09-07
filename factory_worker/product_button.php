<!-- Delete Product -->
    <div class="modal fade" id="delproduct_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Do you wish to Trash this Drug?</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from drug_table where drug_id='$pid'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Drug Name: <strong><?php echo $b['drug_name']; ?></strong></center></h5>
					<form role="form" method="POST" action="deleteproduct.php<?php echo '?id='.$pid; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h3 class="modal-title" id="myModalLabel">Scan the QR</h3></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from drug_table where drug_id='$pid'");
						$b=mysqli_fetch_array($a);
                        $drug_id = $b['drug_id'];
                        $name = $b['drug_name'];
                        $qty = $b['qty'];
                        $status = $b['status'];
                        $expiry = $b['expiry_date'];
                        if ($status == 0) {
                           $message = "Drug Name:"." ".$name."\n"."Expiry date: ".$expiry."\n"."Status: This drug has expired!";
                        }else if($status ==1){
                             $message = "Drug Name:"." ".$name."\n"."\n"."Expiry date: ".$expiry."\n"."Status: This drug will expire soon!";
                        }else{
                             $message = "Drug Name:"." ".$name."\n"."\n"."Expiry date: ".$expiry."\n"."Status: This drug is still very valid!";
                        }

                        QRcode::png($message, "../upload/scan_$drug_id.png"); ?>
                            <img src="../upload/<?php echo 'scan_'.$drug_id; ?>.png" width="200px" height="200px" alt="scan img" style="position: relative; left: 200px">
                        
					<div style="height:10px;"></div>
                        
				</div>
				</div>
                </div>
            </div>
        </div>

<!-- Edit Drug -->
    <div class="modal fade" id="editproduct_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Refurbish this Drug</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <?php
                        $a=mysqli_query($conn,"select * from drug_table where drug_id='$pid'");
                        $b=mysqli_fetch_array($a);
                    ?>
                    <div style="height:10px;"></div>
                    <form role="form" method="POST" action="../includes/refurbish.php?drug=<?php echo $pid; ?>">
                        
                        <div class="form-group input-group date" data-provide="datepicker">
                            <span class="input-group-addon">Production Date:</span>
                            <input type="text" class="form-control" name="pro_date" value="<?php echo ucwords($b['prod_date']);  ?>" required readonly="">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-th"></span></div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group date" data-provide="datepicker">
                            <span class="input-group-addon">Expiry Date:</span>
                            <input type="text" class="form-control" name="expiry_date" value="<?php echo ucwords($b['expiry_date']);  ?>" required readonly="">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-th"></span></div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">Add a Comment</span>
                            <textarea cols="40" rows="10" name="comment">
                                
                            </textarea>
                        </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success evaluate" name="update"><i class="fa fa-check-square-o"></i> Save Refurbish</button>
                    </form>
                </div>
        </div>
    </div>
<!-- /.modal -->







