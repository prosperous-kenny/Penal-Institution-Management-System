<?php
/**
 * Created by PhpStorm.
 * User: Prosperous_Kenny
 * Date: 8/19/2020
 * Time: 10:05 PM
 * "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
 */

session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Visit Details</title>

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
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
        <div class="main-content" >
            <div class="wrap-content container" id="container">
                <!-- start: PAGE TITLE -->
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle">  View Visits</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <span>Admin</span>
                            </li>
                            <li class="active">
                                <span>View Visits</span>
                            </li>
                        </ol>
                    </div>
                </section>
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <!--<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Patients</span></h5>-->
                            <?php
                            $vid=$_GET['viewid'];
                            $ret=mysqli_query($con,"select  visitor_details.*, inmate_details.* from visitor_details, inmate_details where inmate_details.Inmate_Id = visitor_details.Inmate_ID and visitor_details.id = '$vid'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {
                            ?>
                            <table border="1" class="table table-bordered">
                                <tr align="center">
                                    <td colspan="4" style="font-size:20px;color:blue">
                                        View Visit</td></tr>

                                <tr>
                                    <th scope>Visitor ID</th>
                                    <td><?php  echo $row['visitor_id'];?></td>
                                    <th scope>Visitor Name</th>
                                    <td class="hidden-xs"><?php echo $row['Firstname'],'  ', $row['Lastname'];?></td>
                                </tr>
                                <tr>
                                    <th scope>Inmate ID</th>
                                    <td><?php  echo $row['Inmate_ID'];?></td>
                                    <th>Inmate Name</th>
                                    <td class="hidden-xs"><?php echo $row['Inmate_FirstName'],'  ', $row['Inmate_LastName'];?></td>
                                </tr>
                                <tr>
                                    <th> Gender</th>
                                    <td><?php  echo $row['Gender'];?></td>
                                    <th>Born</th>
                                    <td><?php  echo $row['Birth_date'];?></td>
                                </tr>
                                <tr>

                                    <th>Arrival Time</th>
                                    <td><?php  echo $row['TimeofVisit'];?></td>
                                    <th>Depart Time</th>
                                    <td><?php  echo $row['Depart_time'];?></td>
                                </tr>

                                <tr>
                                    <th>Date of Visit</th>
                                    <td><?php  echo $row['creationDate'];?></td>

                                </tr>

                                <?php }?>
                            </table>

                        </div>
                    </div>
                </div>
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
