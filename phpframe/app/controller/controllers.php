<?php 

function HomeController() {
	$data = [
		'home'		=> "Myanmar Links",
		'another'	=> 'Test Another'
	];
	_load_view("home", $data);
}

function BlogController() {
	_load_view("blog");
}

function PageController() {
	_load_view("page");	
}

function AboutusController() {
	$about = "Test";
	$data = [
		'about'	=> 'Test'
	];
	_load_view("aboutus", $data);
}


 ?>