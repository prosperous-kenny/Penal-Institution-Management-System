<!--Prosperous Kenny in the coding under "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
Date:17/06/2020 Wednesday-->
<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit'])) {
    $_SESSION['login']=$_POST['staff_Id'];
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    /*$staff_id = $_POST['staff_id'];*/
    $password1 = md5($_POST['password']);
    $password = $_POST['password'];
    $jailor = "jailor";
    $supervisor = "supervisor";
    $interior_minister = "interior_minister";
    $admin = "admin";

    $result_jailor = mysqli_query($con, "SELECT * FROM staff WHERE staff_Id = '".$_POST['staff_Id']."' and password = '$password1' and role = 'jailor'");
    $run_jailor = mysqli_query($result_jailor);


    $result_supervisor = mysqli_query($con, "SELECT * FROM staff WHERE staff_Id = '".$_POST['staff_Id']."' and password = '$password1' and role = 'supervisor'");
    $run_supervior = mysqli_query($result_supervisor);


    $result_interior_minister = mysqli_query($con, "SELECT * FROM staff WHERE staff_Id = '".$_POST['staff_Id']."' and password = '$password1' and role = 'interior_minister'");
    $run_interior_minister = mysqli_query($result_interior_minister);

    $result_admin = mysqli_query($con, "SELECT * FROM staff WHERE staff_Id = '".$_POST['staff_Id']."' and password = '$password1' and role = 'admin'");
    $run_admin = mysqli_query($result_admin);

    /*$num=mysqli_fetch_array($result);*/
    $count1 = mysqli_num_rows($result_jailor);
    $count2 = mysqli_num_rows($result_supervisor);
    $count3 = mysqli_num_rows($result_interior_minister);
    $count4 = mysqli_num_rows($result_admin);
    $row = mysqli_fetch_array($result_supervisor);
    $row1 = mysqli_fetch_array($result_jailor);
    $row2 = mysqli_fetch_array($result_interior_minister);
    if ($count1 == 1  && $row1 > 0) {

        $_SESSION['id']=$row1['id'];
        $uip=$_SERVER['REMOTE_ADDR'];
        $status=1;
        $staff_name = mysqli_query($con, "select CONCAT(staff_firstname,' ',staff_lastname) as staff2 from staff where id  = '".$row1['id']."'");
        $name = mysqli_fetch_row($staff_name);

        mysqli_query($con,"insert into staff_log(sid,staff_id,userip,staff_name,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','".$name=['staff2']."', '$status')");
        echo "<script>window.open('/P.I.M.S/Penal/p.i.m.s/jailor/dashboard.php', '_self')</script>";


    } else if ($count2 == 1 && $row > 0)
    {
        $_SESSION['id']=$row['id'];
        $uip=$_SERVER['REMOTE_ADDR'];
        $status=1;
        $staff_name = mysqli_query($con, "select CONCAT(staff_firstname,' ',staff_lastname) as staff2 from staff where id  = '".$row['id']."'");
        $name = mysqli_fetch_row($staff_name);
        mysqli_query($con,"insert into staff_log(sid,staff_id,userip,staff_name,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','".$name=['staff2']."', '$status')");
        echo "<script>window.open('/P.I.M.S/Penal/p.i.m.s/supervisor/dashboard.php', '_self')</script>";

    } else if ($count3 == 1 && $row2 > 0) {
        $_SESSION['id']=$row2['id'];
        $uip=$_SERVER['REMOTE_ADDR'];
        $status=1;
        $staff_name = mysqli_query($con, "select CONCAT(staff_firstname,' ',staff_lastname) as staff2 from staff where id  = '".$row2['id']."'");
        $name = mysqli_fetch_row($staff_name);
        mysqli_query($con,"insert into staff_log(sid,staff_id,userip,staff_name,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','".$name=['staff2']."', '$status')");

        echo "<script>window.open('/P.I.M.S/Penal/p.i.m.s/staff/dashboard.php', '_self')</script>";
    } else if ($count4 == 1) {
        echo "<script>window.open('/P.I.M.S/Penal/p.i.m.s/admin/dashboard.php', '_self')</script>";

    } else {
        $_SESSION['errmsg'] = "Invalid Staff-ID or password";
        $extra = "index.php";
        $host = $_SERVER['HTTP_HOST'];
        $uip=$_SERVER['REMOTE_ADDR'];
        $status=0;
        mysqli_query($con,"insert into staff_log(staff_id,userip,status) values('".$_SESSION['login']."','$uip','$status')");
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("location:http://$host$uri/$extra");
        exit();

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Staff-Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body class="login">
<div class="row">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="logo margin-top-30">
            <h2>PIMS LOGIN</h2>
        </div>

        <div class="box-login">
            <form class="form-login" method="post">
                <fieldset>
                    <legend>
                        Login to your PIMS
                    </legend>
                    <p>
                        Please enter your name and password to log in.<br />
                        <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
                    </p>
                    <div class="form-group">
								<span class="input-icon">
									<input type="text" class="  " name="staff_Id" placeholder="Staff-ID">
									<i class="fa fa-user"></i> </span>
                    </div>
                    <div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password"><i class="fa fa-lock"></i>
									 </span>
                    </div>
                    <div class="form-actions">

                        <button type="submit" class="btn btn-primary pull-right" name="submit">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>

                </fieldset>
            </form>

            <div class="copyright">
                &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> PIMS</span>. <span>All rights reserved</span>
            </div>

        </div>

    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/modernizr/modernizr.js"></script>
<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="vendor/switchery/switchery.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>

<script src="assets/js/main.js"></script>

<script src="assets/js/login.js"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();
    });
</script>

</body>
<!-- end: BODY -->
</html>