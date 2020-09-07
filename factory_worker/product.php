<?php require "../phpqrcode/qrlib.php";
      include('core.inc.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="color:#fff">This drugs have been forwaded for Refurbish</h1>
        </div>
        <?php if (isset($msg)) {
                        ?><div class="alert alert-info"><?php echo $msg; ?> <i class="fa fa-check"></i></div>
                      <?php  } ?>
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
    
 /*   function evaluate(obj){
        var id = obj.attr("id");
        $.ajax({
            url: "../includes/refurbish.php",
            method: "GET",
            data:{id:id},
            success:function(data){
                obj.html(data);
                objRemove = obj.parent().parent().fadeOut(2000);
                
            }
        });
    }
*/
    $(".evaluate").click(function(){
    var id = $(this).attr("id");
    var obj = $(this);
    $(this).addClass("click");

    setTimeout(function(){
        obj.removeClass("click");
        evaluate(obj);
    }, 5000);
});
</script>
</body>
</html>