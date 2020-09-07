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
            <h1 class="page-header">List of Expiry Drugs</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
                    <tr>
                        <th>S/n</th>
                        <th>Drug Name</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                	<?php echo  expireDrugs(); ?>
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