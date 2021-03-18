<?php
/**
 * Created by PhpStorm.
 * User: Prosperous_Kenny
 * Date: 7/25/2020
 * Prosperous Kenny in the coding under "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
   Date:25/07/2020 Saturday
 * Time: 8:11 AM
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
    <title>Search Transfers</title>

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
                            <h1 class="mainTitle">Search Transfers</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <span>Supervisor</span>
                            </li>
                            <li class="active">
                                <span>Search Transfers</span>
                            </li>
                        </ol>
                    </div>
                </section>
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" method="post" name="search">

                                <div class="form-group">
                                    <label for="inmatename">
                                        Search by FileNumber
                                    </label>
                                    <input type="text" name="searchdata" id="searchdata" class="form-control" value="" required='true'>
                                </div>

                                <button type="submit" name="search" id="submit" class="btn btn-o btn-primary">
                                    Search
                                </button>
                            </form>
                            <?php
                            if(isset($_POST['search']))
                            {


                                $inmate = $_POST['inmate_id'];
                                $sdata=$_POST['searchdata'];
                            ?>
                            <h4 align="center">Result against "<?php echo $sdata;?>"</h4>
                            <table class="table table-hover" id="sample-table-1">
                                <thead>
                                <tr>
                                    <th class="center">S/No</th>
                                    <th>Inmate_ID</th>
                                    <th>Inmate Name</th>
                                    <th>FileNumber</th>
                                    <th>Initial Penal Institution </th>
                                    <th>Current Penal Institution </th>
                                    <th>TransferDate </th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $sql=mysqli_query($con,"select transfer.inmate_id, Inmate_FirstName,Inmate_LastName, FileNumber, FromPrison, ToPrison, TransferDate from transfer,inmate_details where FileNumber like '%$sdata%' and transfer.inmate_id = inmate_details.Inmate_Id");
                                $num=mysqli_num_rows($sql);
                                $cnt=1;
                                while($row=mysqli_fetch_array($sql))
                                {
                                    ?>
                                    <tr>
                                        <td class="center"><?php echo $cnt;?>.</td>
                                        <td class="hidden-xs"><?php echo $row['inmate_id'];?></td>
                                        <td><?php echo $row['Inmate_FirstName']." ".$row['Inmate_LastName'];?></td>
                                        <td><?php echo $row['FileNumber'];?></td>
                                        <td><?php echo $row['FromPrison'];?></td>
                                        <td><?php echo $row['ToPrison'];?></td>
                                        <td><?php echo $row['TransferDate'];?>
                                            </td>
                                            
                                            <td>

                                                <a href="view-transfer.php?viewid=<?php echo $row['ID'];?>"><i class="fa fa-eye"></i></a>

                                            </td>
                                        </tr>
                                        <?php
                                        $cnt=$cnt+1;
                                    } } else { ?>
                                    <tr>
                                        <td colspan="8"> No Transfer found </td>

                                    </tr>

                                <?php } ?></tbody>
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
