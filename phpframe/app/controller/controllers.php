<?php 

function HomeController() {
	$home = "Myanmar Links";
	include "../app/view/home.php";
}

function BlogController() {
	include "../app/view/blog.php";	
}

function PageController() {
	include "../app/view/page.php";		
}

function AboutusController() {
	$about = "Test";
	include "../app/view/aboutus.php";	
}


 ?>