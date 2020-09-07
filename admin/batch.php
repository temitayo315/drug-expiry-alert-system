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
            <h1 class="page-header">Batch list
            	<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addBatch"><i class="fa fa-plus-circle"></i> Add Batch</button>
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Batch Name</th>
                        <th>Created by</th>
						<th>Date</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo batchList(); ?>
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
<script>
    $(".remove").click(function(e,obj){
    e.preventDefault();
    var clicked= obj.attr("id");
   if (confirm("Are you sure you want to delete this?")) {
        $.ajax({
            url:"deleteBatch.php",
            method:"POST",
            data:{clicked: clicked },
            success:function(data){
                alert(data);
            }
        });
    }
});

</script>
</body>
</html>