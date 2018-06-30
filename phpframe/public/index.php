<?php 

define("DD", realpath("../"));


require DD . "/wpa29/functions.php";
require DD . "/wpa29/database.php";
require DD . "/app/controller/controllers.php";

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

$e_request_uri = explode("/", $request_uri);
$e_script_name = explode("/", $script_name);

$result_uri = array_diff($e_request_uri, $e_script_name);
$request_uri = array_values($result_uri);

if(empty($request_uri)) {
	$controller = "HomeController";
} else {
	$controller = ucfirst($request_uri[0]) . "Controller";
}

if(function_exists($controller)) {
	call_user_func($controller);
} else {
	echo "<h1>404</h1>";
}
	

?>