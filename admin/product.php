<?php require "../phpqrcode/qrlib.php";
      include('../includes/core.inc.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Drug List
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addproduct"><i class="fa fa-plus-circle"></i> Add New Drug</button>
				</span>
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        	<div class="table table-responsive">
            <table width="100%" class="table table-striped table-bordered table-hover" id="prodTable">
                <thead>
                    <tr>
                        <th>S/n</th>
                        <th>Drug Name</th>
                        <th>Description</th>
						<th>Batch</th>
						<th>QR Code</th>
						<th>Prod. Date</th>
						<th>Expiry Date</th>
						<th>Qty</th>
						<th>Price</th>
						<th>Expiry Status</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php echo DrugList();	?>
                </tbody>
            </table>
        </div>
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
    
    function evaluate(obj){
        var id = obj.attr("id");
        $.ajax({
            url: "../includes/evaluate.php",
            method: "GET",
            data:{id:id},
            success:function(data){
                obj.html(data);
                objRemove = obj.parent().parent().fadeOut(3000);
                
            }
        });
    }

    $(".evaluate").click(function(){
    var id = $(this).attr("id");
    var obj = $(this);
    $(this).addClass("click");

    setTimeout(function(){
        obj.removeClass("click");
        evaluate(obj);
    }, 3700);
});
</script>
</body>
</html>