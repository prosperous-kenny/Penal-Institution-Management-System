

<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
/*function fetch_data()
 {
     $output = '';
     $fdate=$_POST['fromdate'];
     $tdate=$_POST['todate'];
    $conn = mysqli_connect("localhost", "root", "", "p.i.m.s");
     $sql=mysqli_query($conn, "select * from inmate_details where date(creationDate) between '$fdate' and '$tdate' ORDER BY id ASC");
     $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_array($result))
     {
         $output .= '<tr>  
                          <td>'.$row["Inmate_Id"].'</td>  
                          <td>'.$row["Inmate_FirstName"].'</td>
                          <td>'.$row["Inmate_LastName"].'</td>  
                          <td>'.$row["Gender"].'</td>  
                          <td>'.$row["Nationality"].'</td>
                          <td>'.$row["Crime"].'</td>
                          <td>'.$row["Block"].'</td>
                          <td>'.$row["Duration"].'</td>
                          <td>'.$row["creationDate"].'</td>
                            
                     </tr>  
                          ';
     }
     return $output;
 }


if(isset($_POST['print']))
{

    require_once('TCPDF-main/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Inmate Report");
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 11);
    $obj_pdf->AddPage();

    $content .= '  
      <h4 align="center">Inmate Report </h4><br />
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                        <th width="5%">S/No</th>
                                    <th width="5%">Inmate ID</th>
                                    <th width="15%">Inmate FirstName</th>
                                    <th width="15%">Inmate LaststName</th>
                                    <th width="10%">Gender</th>
                                    <th width="20%">Nationality</th>
                                    <th width="10%">Crime</th>
                                    <th width="5%">Block</th>
                                    <th width="5%">Duration</th>
                                    <th width="20%">Registered Date & Time</th>
           </tr>  
      ';


    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf', 'I');

}*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inmate Report</title>

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

    <script src="assets/js/html2pdf.bundle.min.js"></script>
    <script>
        function generatePDF() {
            // Choose the element that our invoice is rendered in.
            const element = document.getElementById("print");
            // Choose the element and save the PDF for our user.
            html2pdf()
                .set({ html2canvas: { scale: 4 } })
                .from(element)
                .save();
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
                            <h1 class="mainTitle">Inmate Report</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li>
                                <span>Admin</span>
                            </li>
                            <li class="active">
                                <span>Inmate Report</span>
                            </li>
                        </ol>
                    </div>
                </section>
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <h5 align="right"> <button onclick="generatePDF()" class="btn btn-primary">
                                Print Report <i class="fa fa-arrow-circle-right"></i>
                            </button>  </h5>    
                        <div id="print" class="col-md-12">

                            <?php
                            $fdate=$_POST['fromdate'];
                            $tdate=$_POST['todate'];

                            ?>

                            <h4 class="center" >Report from <?php echo $fdate?> to <?php echo $tdate?>

                            </h4>


                            <table id = "datatable" class="table table-bordered dt-responsive nowrap">


                                <thead>



                                <tr>
                                    <th class="center">S/No</th>
                                    <th>Inmate ID</th>
                                    <th>Inmate Name</th>
                                    <th>Gender</th>
                                    <th>Nationality</th>
                                    <th>Crime</th>
                                    <th>Block</th>
                                    <th>Duration</th>
                                    <th>Registered Date & Time</th>
                                </tr>


                                </thead>
                                <tbody>
                                <?php

                                $sql=mysqli_query($con, "select * from inmate_details where date(creationDate) between '$fdate' and '$tdate'");
                                $cnt=1;
                                while($row=mysqli_fetch_array($sql))
                                {
                                    ?>
                                    <tr>
                                        <td class="center"><?php echo $cnt;?>.</td>
                                        <td class="hidden-xs"><?php echo $row['Inmate_Id'];?></td>
                                        <td class="hidden-xs"><?php echo $row['Inmate_FirstName'],'  ', $row['Inmate_LastName'];?></td>
                                        <td><?php echo $row['Gender'];?></td>
                                        <td><?php echo $row['Nationality'];?></td>
                                        <td><?php echo $row['Crime'];?></td>
                                        <td><?php echo $row['Block'];?></td>
                                        <td><?php echo $row['Duration'];?>
                                        <td><?php echo $row['creationDate'];?>
                                    </tr>

                                    <?php
                                    $cnt=$cnt+1;
                                }?></tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--start: FOOTER -->
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
