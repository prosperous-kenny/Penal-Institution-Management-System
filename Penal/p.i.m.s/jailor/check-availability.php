<?php
/**
 * Created by PhpStorm.
 * User: Prosperous_Kenny
 * Date: 7/27/2020
 * Time: 10:23 PM
 * "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
 */

require_once("include/config.php");
if(!empty($_POST["Inmate_Id"])) {

    $inmate_id= $_POST["Inmate_Id"];
    $result =mysqli_query($con,"SELECT Inmate_Id FROM inmate_details WHERE Inmate_Id='$inmate_id'");
    $count=mysqli_num_rows($result);
if($count>0)
{
 echo "<span style='color:red'> Inmate ID already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{

	echo "<span style='color:green'> Inmate ID  available for Registration .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
