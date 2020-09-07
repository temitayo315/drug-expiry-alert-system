<?php include('../includes/core.inc.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sales Report to Distribution Center
            <span class="pull-right">
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sales"><i class="fa fa-plus-circle"></i> New Sales</button>
				</span>
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="salesTable">
                <thead>
                    <tr>
						<th class="hidden"></th>
                        <th>Sales Date</th>
						<th>Distribution Center</th>
						<th>Drugs Sold</th>
						<th>Expiry Status</th>
                        <th>Total Purchase</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					$sq=mysqli_query($conn,"SELECT *
											FROM sales s JOIN drug_table d ON s.sales_id= d.drug_id JOIN distribution_center c ON s.dist_center=c.id ORDER BY `sales_date` DESC");
					while($sqrow=mysqli_fetch_array($sq)){
						$status = $sqrow['status'];
					?>
						<tr>
							<td class="hidden"></td>
							<td><?php echo date('M d, Y',strtotime($sqrow['sales_date'])); ?></td>
							<td><?php echo $sqrow['Name']; ?></td>
							<td align="right">

								<?php echo $sqrow['drug_name']; ?></td>
								<td id="status-<?php echo $pid;?>"><?php if ($status == 0) {
								echo "<span style='font-weight:bold; color:red'>Drug expired!</span>";
									} ?></td>
							<td>
								<a href="#details<?php echo $sqrow['sales_id']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-fullscreen"></span> View Full Details</a>
								<?php include ('full_details.php'); ?>
							</td>
						</tr>
					<?php
					}
				?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
</body>
</html>