<!--Prosperous Kenny in the coding under "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
Date:19/06/2020 Friday-->

<?php
error_reporting(0);
require_once("include/config.php");
if(!empty($_POST["emailid"])) {
    $email= $_POST["emailid"];

    $result =mysqli_query($con,"SELECT Email FROM staff WHERE Email='$email'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        echo "<span style='color:red'> Email_Address already exists .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    } else{

        echo "<span style='color:green'> Email_Address available for Registration .</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}


?>
