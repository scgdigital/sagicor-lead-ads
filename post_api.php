<?php
header("Content-Type:application/json");
if (isset($_POST['leaddata']) && $_POST['leaddata']!="") {
	$leaddata = $_POST['leaddata'];
	echo $leaddata;
}
    ?>