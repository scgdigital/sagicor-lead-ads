<?php
header("Content-Type:application/json");
/*if (isset($_POST['leaddata']) && $_POST['leaddata']!="") {
	$leaddata = $_POST['leaddata'];
	echo $leaddata;
	error_log(print_r($leaddata, true));
}
error_log(print_r("No data", true));*/

// takes raw data from the request 
$json = file_get_contents('php://input');
// Converts it into a PHP object 
$data = json_decode($json, true);
 echo $data;
error_log(print_r($data, true));

    ?>