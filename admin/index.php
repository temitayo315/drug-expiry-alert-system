<?php include('../includes/core.inc.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
<div style="height:40px;"></div>
	<div class="row">
	  <div class="col-md-4">
		<div class="card mb-4">
         <i class="fa fa-product-hunt"></i>
          <div class="card-body">
            <h2>Total Drug List</h2>
            <h2 class="card-title"><?php $batch_query = mysqli_query($conn, "SELECT * FROM drug_table");
                                                      $row_count = mysqli_num_rows($batch_query);
                                                         echo $row_count; ?></h2>
          </div>
          <div class="card-footer text-muted">
            <a href="product.php">Check out</a>
          </div>
        </div>
		</div>
	<div class="col-md-4">
		<div class="card mb-4">
          <i class="fa fa-list"></i>
          <div class="card-body">
            <h2>Distribution Center</h2>
            <h2 class="card-title"><?php $batch_query = mysqli_query($conn, "SELECT * FROM distribution_center");
                                                      $row_count = mysqli_num_rows($batch_query);
                                                         echo $row_count; ?></h2>
          </div>
          <div class="card-footer text-muted">
            <a href="customer.php">Check out</a>
          </div>
        </div>
		</div>
	<div class="col-md-4">
		<div class="card mb-4">
           <i class="fa fa-book"></i>
          <div class="card-body">
            <h2>Batch</h2>
            <h2 class="card-title" id="batch_list"><?php $batch_query = mysqli_query($conn, "SELECT * FROM batch");
                                                      $row_count = mysqli_num_rows($batch_query);
                                                         echo $row_count; ?></h2>
          </div>
          <div class="card-footer text-muted">
            <a href="batch.php">Check out</a>
          </div>
        </div>
		</div>
	</div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
           <i class="fa fa-times"></i>
          <div class="card-body">
            <h2>Expiry Drugs</h2>
            <h2 class="card-title" id="batch_list"><?php $expiry = mysqli_query($conn, "SELECT status FROM drug_table WHERE status= 0");
            $row_count = mysqli_num_rows($expiry);
               echo $row_count; ?></h2>
          </div>
          <div class="card-footer text-muted">
            <a href="product.php">Check out</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4">
           <i class="fa fa-trash"></i>
          <div class="card-body">
            <h2>Tashed Drugs</h2>
            <h2 class="card-title" id="batch_list">0</h2>
          </div>
          <div class="card-footer text-muted">
            <a href="#">Check out</a>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<script src="custom.js"></script>
<script>
  /*$("div .mb-4").mouseenter(function(){
 $(this).slideUp("fast",function(){
  $(this).slideDown("fast");
 });
});
*/
</script>
</body>
</html>