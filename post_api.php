<?php
header("Content-Type:application/json");
if (isset($_POST['leaddata']) && $_POST['leaddata']!="") {
	$leaddata = $_POST['leaddata'];
	echo $leaddata;
	error_log(print_r($leaddata, true));
}
error_log(print_r("No data", true));
    ?>