<?php 

define("DD", realpath("../"));

include DD. "/app/controller/controllers.php";

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