<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">

<?php include('_header.php');?>
<body>
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
			</div>
			<p>Orion HealthCare Management System...</p>
		</div>
	</div>
	<!-- End preloading -->

	
	<div class="clearfix"></div>
	
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Type something ann hit enter">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/brand/logo-black.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
         <?php include('_navbar.php');?>
        </div>   
    </nav>
    <!-- End Navigation -->
	
	<!-- Start inner page header -->
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><i class="fa fa-sitemap"></i>OHCMS<span> Modules</span></h2>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li class="active"><i class="fa fa-laptop"></i>OHCMS Modules</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- End inner page header -->
	
	<div class="clearfix"></div>
	
	<!-- Start contain wrapp -->
	<div class="contain-wrapp padding-bot20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-heading text-center">
						<h5>1. Administration Modules</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-circle">
						<div class="icon-box-content">
							<div class="bottom-icon"><i class="fa fa-lock icon-circle fa-3x icon-jaffa"></i></div>
							<h5>1. Administrator<span></span></h5>
							<p>
                            This module is for the super user of system. It has all previledges to access and manage all other modules.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-circle">
						<div class="icon-box-content">
							<div class="bottom-icon"><i class="fa fa-user-md icon-circle fa-3x icon-meadow"></i></div>
							<h5>2. Departmental Head<span></span></h5>
							<p>
                                This module is for department head. It has all previledges to access and manage all other modules.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-circle">
						<div class="icon-box-content">
							<div class="bottom-icon"><i class="fa fa-user-circle-o icon-circle fa-3x icon-picton"></i></div>
							<h5>3.Managerial Module</h5>
							<p>
							    This module is for manegers. It has lesser previledges to access and manage all other modules.
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->

	<!-- Start contain wrapp -->
	<div class="contain-wrapp inverse-container padding-bot30">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-heading text-center">
						<h5>2. Functional Modules</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="process-3colum">
						<li>
							<i class="fa fa-pencil icon-circle icon-mandy fa-6x"></i>
							<h5>Registration Desk Module</h5>
							<p>
                            This module is accessible by the front office department which will fill in patients records to the system.
							</p>
						</li>
                        <li>
							<i class="fa fa-wheelchair-alt icon-circle icon-mandy fa-6x"></i>
							<h5>OutPatient Module</h5>
							<p>
                                Out Patient module  manages records of all outPatients.
							</p>
						</li>
						<li>
							<i class="fa fa-flask icon-circle icon-mandy fa-6x"></i>
							<h5>Laboratory Module</h5>
							<p>
                                Laboratory module manages patients laboratory tests and  diagnosis records and also manage laboratory assets.
							</p>
						</li>
                        <li>
							<i class="fa fa-bed icon-circle icon-mandy fa-6x"></i>
							<h5>InPatient Module</h5>
							<p>
                                In Patient module manages records of all patients addmitted and also ward and nurses on duty allocation.
							</p>
						</li>
                        
                        <li>
							<i class="fa fa-medkit icon-circle icon-mandy fa-6x"></i>
							<h5>Pharmacy Module</h5>
							<p>
                                 Pharmacy/Pharmaceutical module manages records of all drugs and other Pharmaceuticals assets.
							</p>
						</li>
						<li>
							<i class="fa fa-exclamation-triangle icon-circle icon-picton fa-6x"></i>
							<h5>Isolation Module</h5>
							<p>
                                Isolation module manages records of isolated patients.
							</p>
						</li>
                        
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->

		
	<!-- Start footer -->
	<?php include("_footer.php");?>
	<!-- End footer -->
	
	<!-- Start to top -->  
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>  
    <!-- End to top -->
	
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/loading.js"></script>

    
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
	
    <!-- easing -->
	<script src="js/jquery.easing-1.3.min.js"></script>
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
    <!-- Bootsnavs -->
    <script src="js/bootsnav.js"></script>

	<!-- Custom form -->
	<script src="js/form/jcf.js"></script>
	<script src="js/form/jcf.scrollable.js"></script>
	<script src="js/form/jcf.select.js"></script>
	
	<!-- Custom checkbox and radio -->
	<script src="js/checkator/fm.checkator.jquery.js"></script>
	<script src="js/checkator/setting.js"></script>
	
	<!-- Select language -->
	<script src="js/selectdropdown/jquery.dd.min.js"></script>
	<script src="js/selectdropdown/setting.js"></script>

    <!-- masonry -->
	<script src="js/masonry/masonry.min.js"></script>	
	<script src="js/masonry/masonry.filter.js"></script>
	<script src="js/masonry/setting.js"></script> 
	
    <!-- PrettyPhoto -->
	<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>  
	<script src="js/prettyPhoto/setting.js"></script>

    <!-- owl carousel -->
	<script src="js/owlcarousel/owl.carousel.min.js"></script>  
	<script src="js/owlcarousel/setting.js"></script>
	
    <!-- Flip -->
	<script src="js/flip/flip.js"></script>
	<script src="js/flip/setting.js"></script>
	
    <!-- Parallax -->
	<script src="js/parallax/jquery.parallax-1.1.3.js"></script>
	<script src="js/parallax/setting.js"></script>
	
    <!-- Twitter -->
	<script src="js/twitter/tweetie.min.js"></script>
	<script src="js/twitter/ticker.js"></script>
	<script src="js/twitter/setting.js"></script>
	
    <!-- Custom -->
    <script src="js/custom.js"></script>

	<!-- Theme option-->
	<script src="js/template-option/demosetting.js"></script>
</body>

</html>