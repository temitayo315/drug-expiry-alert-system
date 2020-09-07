<!-- Edit Customer -->
    <div class="modal fade" id="editd_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Refurbish</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from drug_table where drug_id='$pid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="">
                        
                        <div class="form-group input-group date" data-provide="datepicker">
                            <span class="input-group-addon">Production Date:</span>
                            <input type="text" class="form-control" name="pro_date" value="<?php echo ucwords($b['prod_date']);  ?>" required readonly="">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-th"></span></div>
                        </div>
						
                        <div class="form-group input-group date" data-provide="datepicker">
                            <span class="input-group-addon">Expiry Date:</span>
                            <input type="text" class="form-control" name="pro_date" value="<?php echo ucwords($b['expiry_date']);  ?>" required readonly="">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-th"></span></div>
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

