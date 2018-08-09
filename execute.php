<?php
session_start();
$code = $_POST['codigo'];
header("Access-Control-Allow-Origin: *");

if((substr_count($code,"copy")>0) && (substr_count($code,"fopen")>0) && (substr_count($code,"fwrite")>0) && ){
	echo "<p1>Hackerino</p1>";
	die();
}
if(preg_match('/(?<![a-z0-9_])eval\((base64|eval|\$_|\$\$|\$[A-Za-z_0-9\{]*(\(|\{|\[))/i',$code)){
	echo "<p1>Hackerino</p1>";
	die();
}

ob_start();
eval(' ?>'.$code);
$output = ob_get_contents();
ob_end_clean();

if(strlen($output) > 512*1024) {
	echo "<strong>Error</strong> - Output exceeded the limit. The first 1024 characters were:<br />";
	echo substr($output, 0, 1024);
	die();
} else {
	echo "<p1>".$output."</p1>";
}
?>