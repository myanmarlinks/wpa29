<?php 


if(!isset($_GET['page'])) {
	include "../app/view/home.php";
} else {
	$file = "../app/view/" . $_GET['page'] . ".php";
	if(file_exists($file)) {
		include $file;
	} else {
		echo "404";
	}
}

 ?>