<!--Prosperous Kenny in the coding under "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
Date:17/06/2020 Wednesday-->


<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <script src="https://kit.fontawesome.com/89c422c869.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="image/png" href="assets/images/red-administrator-icon.png">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1, firefox=1" />
		<title>Admin  | Dashboard</title>

		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Dashboard</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i class="fas fa-circle fa-stack-2x" style="color: Tomato"></i> <i class="fas fa-user-friends fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle">Manage Jailors</h2>
											
											<p class="links cl-effect-1">
												<a href="manage-jailors.php">
												<?php $result = mysqli_query($con,"SELECT * FROM staff where role='jailor' ");
$num_rows = mysqli_num_rows($result);
{
?>
											Total Jailors :<?php echo htmlentities($num_rows);  } ?>
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i class="fas fa-circle fa-stack-2x" style="color: Tomato"></i> <i class="fas fa-user-cog fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle">Manage Supervisor</h2>
										
											<p class="cl-effect-1">
												<a href="manage-supervisor.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM staff where role = 'supervisor'");
$num_rows1 = mysqli_num_rows($result1);
{
?>
											Total Supervisors :<?php echo htmlentities($num_rows1);  } ?>
												</a>
												
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i class="fas fa-circle fa-stack-2x" style="color: Tomato"></i> <i class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle"> Visitations</h2>
											
											<p class="links cl-effect-1">
													<a href="manage-visitors.php">
												<?php $sql= mysqli_query($con,"SELECT * FROM visitor_details");
$num_rows2 = mysqli_num_rows($sql);
{
?>
											Total Visitors :<?php echo htmlentities($num_rows2);  } ?>
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>

<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i class="fas fa-circle fa-stack-2x" style="color: Tomato"></i> <i class="fas fa-users fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle">Manage Inmates</h2>

                                            <p class="links cl-effect-1">
												<a href="manage-inmates.php">
<?php $result = mysqli_query($con,"SELECT * FROM inmate_details ");
$num_rows = mysqli_num_rows($result);
{
?>
Total Inmates :<?php echo htmlentities($num_rows);
} ?>		
</a>
											</p>
										</div>
									</div>
								</div>

                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i class="fas fa-circle fa-stack-2x" style="color: Tomato"></i> <i class="fas fa-exchange-alt fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle"> Transfers</h2>

                                            <p class="links cl-effect-1">
                                                       <a href="transfer.php">
                                                        <?php $sql= mysqli_query($con,"SELECT * FROM transfer");
                                                        $num_rows2 = mysqli_num_rows($sql);
                                                        {
                                                            ?>
                                                            Total Transfers :<?php echo htmlentities($num_rows2);  } ?>
                                                    </a>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>




			<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i class="fas fa-circle fa-stack-2x" style="color: Tomato"></i> <i class="far fa-comments fa-stack-1x fa-inverse"></i> </span>
                                            <h2 class="StepTitle">Unread Feedback</h2>
											
											<p class="links cl-effect-1">
												<a href="unseen-feedback.php">
												<?php 
$sql= mysqli_query($con,"SELECT * FROM feedback where  IsRead is null and receiver = 'admin'");
$num_rows22 = mysqli_num_rows($sql);
?>
											Total Feedbacks :<?php echo htmlentities($num_rows22);   ?>
												</a>
												
											</p>
										</div>
									</div>
								</div>



							</div>
						</div>
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
