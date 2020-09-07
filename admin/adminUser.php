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
            <h1 class="page-header">Create Inventory Worker</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="container-fluid">
                    <form method="POST" action="../includes/adminCreate.php">
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Firstname:</span>
                            <input type="text" style="width:350px;" class="form-control" name="fname">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Lastname:</span>
                            <input type="text" style="width:350px;" class="form-control" name="lname">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Phone Number:</span>
                            <input type="text" style="width:350px;" class="form-control" name="phone">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Username:</span>
                            <input type="text" style="width:350px;" class="form-control" name="username">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Password:</span>
                            <input type="password" style="width:350px;" class="form-control" name="password">
                        </div><hr>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Re-type:</span>
                            <input type="password" style="width:350px;" class="form-control" name="repass" required>
                        </div>                      
                </div>
                    <button type="button" class="btn btn-default" ><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary" name="create"><i class="fa fa-save"></i> Create</button>
                    </form>
            
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
</body>
</html>