<?php
session_start();
error_reporting( 0);
include('include/config.php');
$_SESSION['login']=="";
date_default_timezone_set('Africa/Dar_es_salaam');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE staff_log  SET logout = '$ldate' WHERE sid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="admin/index.php";
</script>
