<?php
/**
 * Created by PhpStorm.
 * User: Prosperous_Kenny
 * Date: 7/26/2020 Sunday
 * Time: 1:48 AM
 * Wisdom guide: "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
 */

session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
    $InmateID = $_POST['Inmate_Id'];
    $obed=$_POST['Obedience'];
    $eff=$_POST['Efficiency'];  
    $team = $_POST['TeamWork'];
    $details = $_POST['feedback_details'];
    $user=$_SESSION['login'];
    $receiver= 'admin';

    $sql=mysqli_query($con,"insert into feedback(sender,receiver,Inmate_Id,Obedience,Efficiency,TeamWork,feedback_details) values('$user','$receiver','$InmateID','$obed','$eff','$team','$details')");

    if($sql)
    {
        echo "<script>alert('Feedback Sent');</script>";
        echo "<script>window.location.href ='readquery.php'</script>";

    }else{
        $msg="Failed to Send Feedback";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Send Feedback</title>

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

        <!-- end: TOP NAVBAR -->
        <div class="main-content" >
            <div class="wrap-content container" id="container">
                <!-- start: PAGE TITLE -->
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle">Jailor | Send Feedback</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <span>Jailor</span>
                            </li>
                            <li class="active">
                                <span>Send Feedback</span>
                            </li>
                        </ol>
                    </div>
                </section>
                <!-- end: PAGE TITLE -->
                <!-- start: BASIC EXAMPLE -->
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="col span_2_of_3">
                                <div class="contact-form">
                                            <h5 class="panel-title">Send Feedback</h5>
                                        </div>
                                        <div class="panel-body">

                                            <form role="form" name="adddoc" method="post" onSubmit="return valid();">


                                                <div class="form-group">
                                                    <label for ="Inmate Id">
                                                        Inmate ID
                                                    </label>
                                                    <input type="text" name="Inmate_Id" class="form-control"  placeholder="eg. 2220-2021" required="true">

                                                </div>


                                                    <div class="form-group">
                                                    <label for="obedience">
                                                        Inmate's Obedience
                                                    </label>
                                                    <select id="role" name="Obedience" class="form-control" required="true">
                                                        <option value="">Obedience</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="role">
                                                        Inmate's Efficiency
                                                    </label>
                                                    <select id="role" name="Efficiency" class="form-control" required="true">
                                                        <option value="">Efficiency </option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="teamwork">
                                                        Inmate's TeamWork
                                                    </label>
                                                    <select id="role" name="TeamWork" class="form-control" required="true">
                                                        <option value="">TeamWork</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                 <label for="feedbackdetails">
                                                     Feedback Details
                                                 </label>
                                                     <textarea name="feedback_details" class="form-control"  placeholder="Feedback Details" required="true"></textarea>
                                                        </div>

                                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                                    Send Feedback
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">


                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- start: FOOTER -->
    <?php include('include/footer.php');?>
    <!-- end: FOOTER -->

</div>
        <!-- end: BASIC EXAMPLE -->
        <!-- end: SELECT BOXES -->


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
