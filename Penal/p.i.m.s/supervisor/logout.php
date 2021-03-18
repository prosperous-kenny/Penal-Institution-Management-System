<?php
session_start();
include('include/config.php');
$_SESSION['login']=="";
date_default_timezone_set('(UTC+03:00)Dar-es-salaam');
$ldate=date( 'm-d-Y h:i:s A', time () );
mysqli_query($con,"UPDATE staff_log  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="admin/index.php";
</script>
