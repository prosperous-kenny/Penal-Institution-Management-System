<?php
/**
 * Created by PhpStorm.
 * User: Prosperous_Kenny
 * Date: 7/28/2020 Tuesday
 * Time: 9:34 PM
 *  "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
 */

session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{

 /*   $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder="images/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);*/


    $visitor_Id=$_POST['visitor_id'];
    $firstname=$_POST['Firstname'];
    $lastname=$_POST['Lastname'];
    $ID = $_POST['Inmate_ID'];
    $gender = $_POST['Gender'];
    $birthdate = $_POST['Birth_date'];
    $image=$_POST['image'];
    $time=$_POST['TimeofVisit'];
    $time1=$_POST['Depart_time'];
    $relationship=$_POST['Relationship'];

 /*   if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $image= $final_file;
    }*/

    $sql=mysqli_query($con, "insert into visitor_details(visitor_id, Firstname, Lastname, Inmate_ID, Gender, Birth_date, image, TimeofVisit,Depart_time,Relationship)
     values('$visitor_Id','$firstname','$lastname','$ID','$gender',' $birthdate', '$image','$time','$time1','$relationship')");
    if($sql)
    {
        echo "<script>alert('Vistor info added Successfully');</script>";
        echo "<script>window.location.href ='manage-visitors.php'</script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Add Visitor</title>

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
    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">-->
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
                            <h1 class="mainTitle">Add Visitor</h1>
                        </div>
                        <ol class="breadcrumb">
                         
                        </ol>
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
                                            <h5 class="panel-title">Add Visitor</h5>
                                        </div>
                                        <div class="panel-body">

                                            <form role="form" name="adddoc" method="post" onSubmit="return valid();">


                                                <div class="form-group">
                                                    <label for="staff_Id">
                                                         Visitor's ID
                                                    </label>
                                                    <input type="text" name="visitor_Id" class="form-control"  placeholder="eg 0200-0001-12" required="true">
                                                </div>
                                                
                                                 <div class="form-group">
                                                 <label for="staff_firstname">
                                                      Visitor's FirstName
                                                 </label>
                                                 <input type="text" name="Firstname" class="form-control"  placeholder="Enter Staff FirstName" required="true">
                                                        </div>

                                                <div class="form-group">
                                                    <label for="staff_firstname">
                                                        Visitor's LastName
                                                    </label>
                                                    <input type="text" name="Lastname" class="form-control"  placeholder="Enter Staff LastName" required="true">
                                                </div>


                                                <div class="form-group">
                                                    <label for="fess">
                                                        Inmate ID
                                                    </label>
                                                    <input type="text"  name="Inmate_ID" class="form-control"  placeholder="Enter Inmate ID " required="true" >
                                                    
                                                </div>

                                                <div class="form-group">
                                                    <label class="block">
                                                        Gender
                                                    </label>
                                                    <div class="clip-radio radio-primary">
                                                        <input type="radio" id="rg-female" name="Gender" value="female" >
                                                        <label for="rg-female">
                                                            Female
                                                        </label>
                                                        <input type="radio" id="rg-male" name="Gender" value="male">
                                                        <label for="rg-male">
                                                            Male
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="fess">
                                                        Pick a date of Birth
                                                    </label>
                                                    <input class="form-control datepicker" name="Birth_date"  required="required" data-date-format="yyyy-mm-dd">
                                                </div>


                                               <!-- <div class="form-group">
                                                    <label for="fess">
                                                        Image
                                                    </label>
                                                    <div><input type="file" name="image" class="form-control"></div>
                                                </div>-->

                                                <div class="form-group">
                                                    <label for="Appointmenttime">
                                                        Arrival Time
                                                    </label>
                                                    <input class="form-control" name="TimeofVisit" id="timepicker1" required="required">
                                                </div>

                                                <div class="form-group">
                                                    <label for="Appointmenttime">
                                                        Depart Time
                                                    </label>
                                                    <input class="form-control" name="Depart_time" id="timepicker" required="required">
                                                </div>

                                                <div class="form-group">
                                                    <label for="fess">
                                                        Relationship
                                                    </label>
                                                    <select name="Relationship" class="form-control" required="true">
                                                        <option value="">--Select --</option>
                                                        <option value="Mother">Mother</option>
                                                        <option value="Father">Father</option>
                                                        <option value="Aunty">Aunty</option>
                                                        <option value="Uncle">Uncle</option>
                                                        <option value="Nephew">Nephew</option>
                                                        <option value="Niece">Niece</option>
                                                        <option value="Cousin">Cousin</option>
                                                        <option value="Brother">Brother</option>
                                                        <option value="Sister">Sister</option>
                                                        <option value="Wife">Wife</option>
                                                    </select>
                                                </div>


                                                <button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
                                                    Add Visitor
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
<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
-->
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
<script type="text/javascript">
    $('#timepicker').timepicker({
        minuteStep: 1
    });
</script>

<script type="text/javascript">
    $('#timepicker1').timepicker({
        minuteStep: 1
    });

</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
</html>
