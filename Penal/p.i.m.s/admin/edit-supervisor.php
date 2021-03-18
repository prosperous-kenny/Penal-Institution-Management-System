<!--Prosperous Kenny in the coding under "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
Date:22/06/2020 Monday-->

<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
//Fetching supervisor id
$sid=intval($_GET['id']);
if(isset($_POST['submit']))
{
    $userfirstname=$_POST['staff_firstname'];
    $userlastname=$_POST['staff_lastname'];
    $email=$_POST['Email'];
    // Updating to the database 'p.i.m.s'
    $sql=mysqli_query($con, "Update staff set staff_firstname='$userfirstname',staff_lastname='$userlastname',Email='$email' where id='$sid'");
    if($sql)
    {
        $msg="Updated Successfuly";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Supervisor Info </title>

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
        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->

        <!-- end: TOP NAVBAR -->
        <div class="main-content" >
            <div class="wrap-content container" id="container">
                <!-- start: PAGE TITLE -->
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle">Edit Supervisor Info </h1>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <span>Admin</span>
                            </li>
                            <li class="active">
                                <span>Edit Supervisor Info </span>
                            </li>
                        </ol>
                    </div>
                </section>
                <!-- end: PAGE TITLE -->
                <!-- start: BASIC EXAMPLE -->
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 style="color: green; font-size:18px; ">
                                <?php if($msg) { echo htmlentities($msg);}?> </h5>
                            <div class="row margin-top-30">
                                <div class="col-lg-8 col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Edit Supervisor Info </h5>
                                        </div>
                                        <div class="panel-body">
                                            <?php $sql=mysqli_query($con,"select * from staff where id='$sid'");
                                            while($data=mysqli_fetch_array($sql))
                                            {
                                            ?>
                                            <h4><?php echo htmlentities($data['staff_firstname']);?>'s Profile</h4>
                                            <p><b>Profile Reg. Date: </b><?php echo htmlentities($data['creationDate']);?></p>
                                            <?php if($data['updationDate']){?>
                                                <p><b>Profile Last Updated: </b><?php echo htmlentities($data['updationDate']);?></p>
                                            <?php } ?>
                                            <hr />
                                            <form role="form" name="adddoc" method="post" onSubmit="return valid();">

                                                <div class="form-group">
                                                    <label for="username">
                                                        Staff's FirstName
                                                    </label>
                                                    <input type="text" name="staff_firstname" class="form-control" value="<?php echo htmlentities($data['staff_firstname']);?>" >
                                                </div>

                                                <div class="form-group">
                                                    <label for="username">
                                                        Staff's LastName
                                                    </label>
                                                    <input type="text" name="staff_lastname" class="form-control" value="<?php echo htmlentities($data['staff_lastname']);?>" >
                                                </div>


                                                <div class="form-group">
                                                    <label for="email">
                                                        Email Address
                                                    </label>
                                                    <input type="email" name="Email" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['Email']);?>">
                                                </div>


                                                <?php } ?>


                                                <button type="submit" name="submit" class="btn btn-o btn-primary">
                                                    Update
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
