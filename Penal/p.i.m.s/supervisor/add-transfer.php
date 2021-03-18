<?php
/**
 * Created by PhpStorm.
 * User: Prosperous_Kenny in the coding under "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
 * Date: 7/25/2020 Saturday
 * Time: 8:10 AM
 */
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
        $inmate_id=$_POST['inmate_id'];
        $fileNumber = $_POST['FileNumber'];
        $fromPrison = $_POST['FromPrison'];
        $toPrison = $_POST['ToPrison'];
        $sql=mysqli_query($con, "insert into transfer(inmate_id,FileNumber,FromPrison,ToPrison)values('$inmate_id','$fileNumber','$fromPrison','$toPrison')");
        if($sql)
        {
            echo "<script>alert('Transfer info added');</script>";
            echo "<script>window.location.href ='manage-transfer.php'</script>";

        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Add Transfer</title>

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
                            <h1 class="mainTitle">Add Transfer Information</h1>
                        </div>

                    </div>
                </section>
                <!-- end: PAGE TITLE -->
                <!-- start: BASIC EXAMPLE -->
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row margin-top-30">
                                <div class="col-lg-8 col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Transfer Info</h5>
                                        </div>
                                        <div class="panel-body">

                                            <form role="form" name="adddoc" method="post" onSubmit="return valid();">


                                                <div class="form-group">
                                                    <label for="inmate_id">
                                                         Inmates ID
                                                    </label>
                                                    <input type="text" name="inmate_id" class="form-control"  placeholder="Enter Inmate ID" required="true">
                                                </div>

                                                 <div class="form-group">
                                                 <label for="fileNumber">
                                                      File Number
                                                 </label>
                                                 <input type="text" name="FileNumber" class="form-control"  placeholder="eg.2020-01TR" required="true">
                                                 </div>

                                                <div class="form-group">
                                                    <label for="staff_firstname">
                                                        Initial Penal Institution
                                                    </label>
                                                    <select name="FromPrison" class="form-control" required="true">
                                                        <option value="">Select Penal Institution</option>
                                                        <option value="Arusha">Arusha</option>
                                                        <option value="Ukonga">Ukonga</option>
                                                        <option value="Keko">Keko</option>
                                                        <option value="Segerea">Segerea</option>
                                                        <option value="Isanga">Isanga</option>
                                                        <option value="Karanga">Karanga</option>
                                                        <option value="Mah.Lindi">Mah.Lindi</option>
                                                        <option value="Ruanda">Ruanda</option>
                                                        <option value="Lilungu">Lilungu</option>
                                                        <option value="Butimba">Butimba</option>
                                                        <option value="Uyui">Uyui</option>
                                                        <option value="Maweni">Maweni</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="staff_firstname">
                                                        Current Penal Institution 
                                                    </label>
                                                    <select id="ToPrison" name="ToPrison" class="form-control" required="true">
                                                        <option value="">Select Penal Institution</option>
                                                        <option value="Arusha">Arusha</option>
                                                        <option value="Ukonga">Ukonga</option>
                                                        <option value="Keko">Keko</option>
                                                        <option value="Segerea">Segerea</option>
                                                        <option value="Isanga">Isanga</option>
                                                        <option value="Karanga">Karanga</option>
                                                        <option value="Mah.Lindi">Mah.Lindi</option>
                                                        <option value="Ruanda">Ruanda</option>
                                                        <option value="Lilungu">Lilungu</option>
                                                        <option value="Butimba">Butimba</option>
                                                        <option value="Uyui">Uyui</option>
                                                        <option value="Maweni">Maweni</option>
                                                    </select>
                                                </div>

                                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                                    Add Transfer Info
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
        </div>
        <!-- end: BASIC EXAMPLE -->






        <!-- end: SELECT BOXES -->

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
