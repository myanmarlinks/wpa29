<?php 

function HomeController() {
	$data = [
		'home'		=> "Myanmar Links",
		'another'	=> 'Test Another',
		'students'	=> _db_get("students")
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

function TestController() {
	$data = [
		"students"	=> [
			[
				'id'	=> 1,
				'name'	=> 'Aung Aung'
			],
			[
				'id'	=> 2,
				'name'	=> 'Hla Hla'
			]
		]
	];
	_load_view("test", $data);
}


 ?>