<!-- Delete Customer -->
    <div class="modal fade" id="del_<?php echo $b_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Distribution Center</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from distribution_center where id='".$query_row['id']."'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Customer Name: <strong><?php echo ucwords($b['Name']); ?></strong></center></h5>
					<form role="form" method="POST" action="deletecustomer.php<?php echo '?id='.$query_row['id']; ?>">
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

<!-- Edit Customer -->
    <div class="modal fade" id="editcustomer_<?php echo $b_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Customer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from distribution_center where id='".$query_row['id']."'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_customer.php<?php echo '?id='.$query_row['id']; ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['Name']); ?>" class="form-control" name="name">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Location:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['Location']); ?>" class="form-control" name="location">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Contact Info:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['Contact_info'] ?>" class="form-control" name="contact">
                        </div>
						<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete Customer -->
    <div class="modal fade" id="delbatch_<?php echo $b_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Drug Batch</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <?php
                        $a=mysqli_query($conn,"select * from batch where b_id='".$query_row['b_id']."'");
                        $b=mysqli_fetch_array($a);
                    ?>
                    <h5><center>Customer Name: <strong><?php echo ucwords($b['Batch_Name']); ?></strong></center></h5>
                    <form role="form" method="POST" action="">
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