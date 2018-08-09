<?php
session_start();
$code = $_POST['codigo'];
header("Access-Control-Allow-Origin: *");
ob_start();
eval(' ?>'.$code);
$output = ob_get_contents();
ob_end_clean();

if(strlen($output) > 512*1024) {
	echo "<strong>Error</strong> - Output exceeded the limit. The first 1024 characters were:<br />";
	echo substr($output, 0, 1024);
	die();
} else {
	echo "<h1>".$output."</h1>";
}
?>