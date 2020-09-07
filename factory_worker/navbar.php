<!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
				<h1 class="navbar-brand" style="text-align:center;color: #fff; font-size: 30px">Drug Expiry Alert System</h1>
            </div>
           
            <ul class="nav navbar-top-links navbar-right">
                <li><i class="fa fa-user"></i> <?php echo "Welcome"." ". $firstname." ".$lastname; ?></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> Account <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  Change Password</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>   
                </li>
            </ul>
        </nav>
         <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu" style="margin-top:50px">
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Factory Worker<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                 <li>
                                    <a href="batch.php"> <i class="fa fa-product-hunt"></i> Batches</a>
                                </li>
                                <li>
                                    <a href="#"><span class="glyphicon glyphicon-user"></span> Distribution Center <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="customer.php"> <i class="fa fa-credit-card"></i> Customer</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.php"> <i class="fa fa-history"></i> Drug(s) to Refursbish</a>
                                </li>

                            </ul>
                        </li>
                    <li><a href="refurbish.php"><i class="fa fa-history fa-fw"></i> Refurbished Drugs</a></li>
                    <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </div>
            </div>