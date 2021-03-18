<!--Prosperous Kenny in the coding under "Phil 2:13" , "2Peter 1:4" , "Col 2:3"
Date:24/06/2020 Wednesday-->

<?php

// Database Connection

$host="localhost";
$uname="root";
$pass="";
$database = "prisonpro";

$connection=mysqli_connect($host,$uname,$pass);

echo mysqli_error();

//or die("Database Connection Failed");
//$selectdb=mysqli_select_db($database) or die("Database could not be selected");




// Fetch Record from Database

$output			= "";
$table 			= "registration"; // Enter Your Table Name
$sql 			= mysqli_query("select * from $table");
$columns_total 	= mysqli_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
    $heading	=	mysqli_field_name($sql, $i);
    $output		.= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysqli_fetch_array($sql)) {
    for ($i = 0; $i < $columns_total; $i++) {
        $output .='"'.$row["$i"].'",';
    }
    $output .="\n";
}

// Download the file

$filename =  "prisoner_report.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;

?>
