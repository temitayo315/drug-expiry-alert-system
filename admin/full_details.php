<!-- Full Details -->
    <div class="modal fade" id="details<?php echo $sqrow['sales_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title" id="myModalLabel">Purchase Full Details</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$sales=mysqli_query($conn,"SELECT * FROM sales s JOIN drug_table d ON s.drug= d.drug_id JOIN distribution_center c ON s.dist_center=c.id WHERE sales_id='".$sqrow['sales_id']."'");
					$srow=mysqli_fetch_array($sales);
				?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<span>Distribution Center: <strong><?php echo ucwords($srow['Name']); ?></strong></span>
							<span class="pull-right">Date: <strong><?php echo date("F d, Y", strtotime($srow['sales_date'])); ?></strong></span>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-12">
							<table width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>Drug Name</th>
										<th>Purchase Qty</th>
										<th>price</th>
										<th>SubTotal</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$total=0;
										$pd=mysqli_query($conn,"select * from sales left join drug_table on sales.drug=drug_table.drug_id where sales_id='".$sqrow['sales_id']."'");
										while($pdrow=mysqli_fetch_array($pd)){
											?>
											<tr>
												<td><?php echo ucwords($pdrow['drug_name']); ?></td>
												<td><?php echo $pdrow['sales_qty']; ?></td>
												<td align="right">#<?php echo number_format($pdrow['sales_price'],2); ?></td>
												<td align="right">
													<?php 
														$subtotal=$pdrow['sales_price']*$pdrow['sales_qty'];
														echo '#'.number_format($subtotal,2);
														$total+=$subtotal;
													?>
												</td>
											</tr>
											<?php
										}
									?>
									<tr>
										<td align="right" colspan="3"><strong>Total</strong></td>
										<td align="right"><strong><?php echo '#'.number_format($total,2); ?></strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>      
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
