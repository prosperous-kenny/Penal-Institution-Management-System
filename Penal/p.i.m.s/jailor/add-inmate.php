<?php
/**
 * Created by PhpStorm.
 * User: Prosperous_Kenny
 * Date: 7/27/2020
 * Time: 5:11 PM
 * "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
 */
session_start();
/*error_reporting(0);*/
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
  /*  $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder="images/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);*/

    $Inmate_Id=$_POST['Inmate_Id'];
	$Inmate_FirstName=$_POST['Inmate_FirstName'];
    $Inmate_LastName=$_POST['Inmate_LastName'];
    $gender=$_POST['Gender'];
    $birthday = $_POST['Birth_date'];
    $Height=$_POST['Height'];
    $Nationality=$_POST['Nationality'];
    $address=$_POST['Address'];
    $crime = $_POST['Crime'];
    $block = $_POST['Block'];
    $duration = $_POST['Duration'];
    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $photo= $final_file;
    }
    $sql=mysqli_query($con,"insert into inmate_details(Inmate_Id,Inmate_FirstName,Inmate_LastName,Gender,Birth_date,image,Height,Nationality,Address,Crime,Block,Duration) values('$Inmate_Id','$Inmate_FirstName','$Inmate_LastName','$gender','$birthday','$photo','$Height','$Nationality','$address','$crime','$block','$duration')");
    if($sql)
{
echo "<script>alert('Inmate is successfully added');</script>";
header('location:manage-inmates.php');

}
else
{
    echo "<script>alert('Failed to add Inmate');</script>";
    header('location:add-inmate.php');
}

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Jailor | Add Inmate</title>

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

        <script>
        function validate()
        {
        var extensions = new Array("jpg","jpeg","png");
        var image_file = document.regform.image.value;
        var image_length = document.regform.image.value.length;
        var pos = image_file.lastIndexOf('.') + 1;
        var ext = image_file.substring(pos, image_length);
        var final_ext = ext.toLowerCase();
        for (i = 0; i < extensions.length; i++)
        {
        if(extensions[i] == final_ext)
        {
        return true;

        }
        }
        alert("Image Extension Not Valid (Use Jpg,jpeg)");
        return false;
        }</script>


        <script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check-availability.php",
data:'inmate_id='+$("#Inmate_Id").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
    </script>
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
<h1 class="mainTitle">Jailor | Add Inmate</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Jailor</span>
</li>
<li class="active">
<span>Add Inmate</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Add Inmate</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">

<div class="form-group">
<label for="doctorname">
Inmate ID
</label>
<input type="text" name="Inmate_Id"  class="form-control"  placeholder="eg. 2020-2164" required="true" onBlur="userAvailability()">
    <span id="user-availability-status1" style="font-size:12px;"></span>
</div>
<div class="form-group">
        <label for="doctorname">
            Inmate First Name
        </label>
        <input type="text" name="Inmate_FirstName" class="form-control"  placeholder="Enter Inmate's First Name" required="true">
</div>

    <div class="form-group">
        <label for="doctorname">
            Inmate Last Name
        </label>
        <input type="text" name="Inmate_LastName" class="form-control"  placeholder="Enter Inmates Last Name" required="true">
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

    <div class="form-group">
        <label for="fess">
            Inmate's Height
        </label>
        <input type="text" name="Height" class="form-control"  placeholder="eg. 5.6" required="true" maxlength="4" >
    </div>

    <div class="form-group">
        <label for="fess">
            Nationality
        </label>
        <select name="Nationality" class="form-control" required="true">
            <option value="">-- Choose --</option>
            <option value="afghan">Afghan</option>
            <option value="albanian">Albanian</option>
            <option value="algerian">Algerian</option>
            <option value="american">American</option>
            <option value="andorran">Andorran</option>
            <option value="angolan">Angolan</option>
            <option value="antiguans">Antiguans</option>
            <option value="argentinean">Argentinean</option>
            <option value="armenian">Armenian</option>
            <option value="australian">Australian</option>
            <option value="austrian">Austrian</option>
            <option value="azerbaijani">Azerbaijani</option>
            <option value="bahamian">Bahamian</option>
            <option value="bahraini">Bahraini</option>
            <option value="bangladeshi">Bangladeshi</option>
            <option value="barbadian">Barbadian</option>
            <option value="barbudans">Barbudans</option>
            <option value="batswana">Batswana</option>
            <option value="belarusian">Belarusian</option>
            <option value="belgian">Belgian</option>
            <option value="belizean">Belizean</option>
            <option value="beninese">Beninese</option>
            <option value="bhutanese">Bhutanese</option>
            <option value="bolivian">Bolivian</option>
            <option value="bosnian">Bosnian</option>
            <option value="brazilian">Brazilian</option>
            <option value="british">British</option>
            <option value="bruneian">Bruneian</option>
            <option value="bulgarian">Bulgarian</option>
            <option value="burkinabe">Burkinabe</option>
            <option value="burmese">Burmese</option>
            <option value="burundian">Burundian</option>
            <option value="cambodian">Cambodian</option>
            <option value="cameroonian">Cameroonian</option>
            <option value="canadian">Canadian</option>
            <option value="cape verdean">Cape Verdean</option>
            <option value="central african">Central African</option>
            <option value="chadian">Chadian</option>
            <option value="chilean">Chilean</option>
            <option value="chinese">Chinese</option>
            <option value="colombian">Colombian</option>
            <option value="comoran">Comoran</option>
            <option value="congolese">Congolese</option>
            <option value="costa rican">Costa Rican</option>
            <option value="croatian">Croatian</option>
            <option value="cuban">Cuban</option>
            <option value="cypriot">Cypriot</option>
            <option value="czech">Czech</option>
            <option value="danish">Danish</option>
            <option value="djibouti">Djibouti</option>
            <option value="dominican">Dominican</option>
            <option value="dutch">Dutch</option>
            <option value="east timorese">East Timorese</option>
            <option value="ecuadorean">Ecuadorean</option>
            <option value="egyptian">Egyptian</option>
            <option value="emirian">Emirian</option>
            <option value="equatorial guinean">Equatorial Guinean</option>
            <option value="eritrean">Eritrean</option>
            <option value="estonian">Estonian</option>
            <option value="ethiopian">Ethiopian</option>
            <option value="fijian">Fijian</option>
            <option value="filipino">Filipino</option>
            <option value="finnish">Finnish</option>
            <option value="french">French</option>
            <option value="gabonese">Gabonese</option>
            <option value="gambian">Gambian</option>
            <option value="georgian">Georgian</option>
            <option value="german">German</option>
            <option value="ghanaian">Ghanaian</option>
            <option value="greek">Greek</option>
            <option value="grenadian">Grenadian</option>
            <option value="guatemalan">Guatemalan</option>
            <option value="guinea-bissauan">Guinea-Bissauan</option>
            <option value="guinean">Guinean</option>
            <option value="guyanese">Guyanese</option>
            <option value="haitian">Haitian</option>
            <option value="herzegovinian">Herzegovinian</option>
            <option value="honduran">Honduran</option>
            <option value="hungarian">Hungarian</option>
            <option value="icelander">Icelander</option>
            <option value="indian">Indian</option>
            <option value="indonesian">Indonesian</option>
            <option value="iranian">Iranian</option>
            <option value="iraqi">Iraqi</option>
            <option value="irish">Irish</option>
            <option value="israeli">Israeli</option>
            <option value="italian">Italian</option>
            <option value="ivorian">Ivorian</option>
            <option value="jamaican">Jamaican</option>
            <option value="japanese">Japanese</option>
            <option value="jordanian">Jordanian</option>
            <option value="kazakhstani">Kazakhstani</option>
            <option value="kenyan">Kenyan</option>
            <option value="kittian and nevisian">Kittian and Nevisian</option>
            <option value="kuwaiti">Kuwaiti</option>
            <option value="kyrgyz">Kyrgyz</option>
            <option value="laotian">Laotian</option>
            <option value="latvian">Latvian</option>
            <option value="lebanese">Lebanese</option>
            <option value="liberian">Liberian</option>
            <option value="libyan">Libyan</option>
            <option value="liechtensteiner">Liechtensteiner</option>
            <option value="lithuanian">Lithuanian</option>
            <option value="luxembourger">Luxembourger</option>
            <option value="macedonian">Macedonian</option>
            <option value="malagasy">Malagasy</option>
            <option value="malawian">Malawian</option>
            <option value="malaysian">Malaysian</option>
            <option value="maldivan">Maldivan</option>
            <option value="malian">Malian</option>
            <option value="maltese">Maltese</option>
            <option value="marshallese">Marshallese</option>
            <option value="mauritanian">Mauritanian</option>
            <option value="mauritian">Mauritian</option>
            <option value="mexican">Mexican</option>
            <option value="micronesian">Micronesian</option>
            <option value="moldovan">Moldovan</option>
            <option value="monacan">Monacan</option>
            <option value="mongolian">Mongolian</option>
            <option value="moroccan">Moroccan</option>
            <option value="mosotho">Mosotho</option>
            <option value="motswana">Motswana</option>
            <option value="mozambican">Mozambican</option>
            <option value="namibian">Namibian</option>
            <option value="nauruan">Nauruan</option>
            <option value="nepalese">Nepalese</option>
            <option value="new zealander">New Zealander</option>
            <option value="ni-vanuatu">Ni-Vanuatu</option>
            <option value="nicaraguan">Nicaraguan</option>
            <option value="nigerien">Nigerien</option>
            <option value="north korean">North Korean</option>
            <option value="northern irish">Northern Irish</option>
            <option value="norwegian">Norwegian</option>
            <option value="omani">Omani</option>
            <option value="pakistani">Pakistani</option>
            <option value="palauan">Palauan</option>
            <option value="panamanian">Panamanian</option>
            <option value="papua new guinean">Papua New Guinean</option>
            <option value="paraguayan">Paraguayan</option>
            <option value="peruvian">Peruvian</option>
            <option value="polish">Polish</option>
            <option value="portuguese">Portuguese</option>
            <option value="qatari">Qatari</option>
            <option value="romanian">Romanian</option>
            <option value="russian">Russian</option>
            <option value="rwandan">Rwandan</option>
            <option value="saint lucian">Saint Lucian</option>
            <option value="salvadoran">Salvadoran</option>
            <option value="samoan">Samoan</option>
            <option value="san marinese">San Marinese</option>
            <option value="sao tomean">Sao Tomean</option>
            <option value="saudi">Saudi</option>
            <option value="scottish">Scottish</option>
            <option value="senegalese">Senegalese</option>
            <option value="serbian">Serbian</option>
            <option value="seychellois">Seychellois</option>
            <option value="sierra leonean">Sierra Leonean</option>
            <option value="singaporean">Singaporean</option>
            <option value="slovakian">Slovakian</option>
            <option value="slovenian">Slovenian</option>
            <option value="solomon islander">Solomon Islander</option>
            <option value="somali">Somali</option>
            <option value="south african">South African</option>
            <option value="south korean">South Korean</option>
            <option value="spanish">Spanish</option>
            <option value="sri lankan">Sri Lankan</option>
            <option value="sudanese">Sudanese</option>
            <option value="surinamer">Surinamer</option>
            <option value="swazi">Swazi</option>
            <option value="swedish">Swedish</option>
            <option value="swiss">Swiss</option>
            <option value="syrian">Syrian</option>
            <option value="taiwanese">Taiwanese</option>
            <option value="tajik">Tajik</option>
            <option value="Tanzanian">Tanzanian</option>
            <option value="thai">Thai</option>
            <option value="togolese">Togolese</option>
            <option value="tongan">Tongan</option>
            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
            <option value="tunisian">Tunisian</option>
            <option value="turkish">Turkish</option>
            <option value="tuvaluan">Tuvaluan</option>
            <option value="ugandan">Ugandan</option>
            <option value="ukrainian">Ukrainian</option>
            <option value="uruguayan">Uruguayan</option>
            <option value="uzbekistani">Uzbekistani</option>
            <option value="venezuelan">Venezuelan</option>
            <option value="vietnamese">Vietnamese</option>
            <option value="welsh">Welsh</option>
            <option value="yemenite">Yemenite</option>
            <option value="zambian">Zambian</option>
            <option value="zimbabwean">Zimbabwean</option>
        </select>
    </div>

<div class="form-group">
<label for="address">
Inmate Address
</label>
<textarea name="Address" class="form-control"  placeholder="eg P.O.Box 212 Chad" required="true"></textarea>
</div>

<div class="form-group">
<label for="fess">
 Crime Commited
</label>
    <select name="Crime" class="form-control" required="true">
        <option value="">--Select Crime--</option>
        <option value="Capital Felony">Capital Felony</option>
        <option value="Murder">Murder</option>
        <option value="Kidnapping">Kidnapping</option>
        <option value="Home Invasion">Home Invasion</option>
        <option value="Robbery">Robbery</option>
        <option value="Computer Crime">Computer Crime</option>
        <option value="Burglary">Burglary</option>
        <option value="Illegal Weapon Possesion">Illegal Weapon Possesion</option>
        <option value="Drug Possesion">Drug Possession</option>
        <option value="Car Jacking">Car Jacking</option>
        <option value="Terrorism">Terrorism</option>

    </select>
</div>

    <div class="form-group">
        <label for="fess">
            Allocate Block
        </label>
        <select name="Block" class="form-control" required="true">
            <option value="">Select Block</option>
            <option value="A">Block A</option>
            <option value="B">Block B</option>
            <option value="C">Block C</option>
        </select>
    </div>

    <div class="form-group">
        <label for="fess">
            Duration in (Yrs)
        </label>
        <input type="text" name="Duration" class="form-control"  placeholder="eg.12" required="true" maxlength="2" >
    </div>

<button type="submit" name="submit" id="submit" class="btn btn-primary">
Add Inmate
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
</div>
            !-- start: FOOTER -->
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
