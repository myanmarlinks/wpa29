<?php 

define("DD", realpath("../"));

require DD . "/wpa29/functions.php";
require DD. "/app/controller/controllers.php";

if(!isset($_GET['page'])) {
	HomeController();
} else {
	$controller = ucfirst($_GET['page']) . "Controller";
	if(function_exists($controller)) {
		call_user_func($controller);
	} else {
		echo "<h1>404</h1>";
	}
	
}
?>