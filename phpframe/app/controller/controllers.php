<?php 

function HomeController() {

	$mystudents = '[{"id":"1","name":"Aung Aung","address":"Hledan"},{"id":"2","name":"Hla Hla","address":"Hledan"},{"id":"3","name":"Bo Bo Aung","address":"Hledan"},{"id":"4","name":"Myo Win","address":"Hledan"},{"id":"5","name":"Win Myo","address":"Hledan"},{"id":"6","name":"Sai Htee Sai","address":"Hledan"},{"id":"7","name":"Sai Sai","address":"Hledan"},{"id":"8","name":"Sai Sai Khan Hlaing","address":"Hledan"},{"id":"9","name":"G Fatt","address":"Hledan"},{"id":"10","name":"J Me","address":"Hledan"},{"id":"11","name":"Kyat Pha","address":"Hledan"},{"id":"12","name":"Wut Hmone Shwe Yee","address":"Hledan"},{"id":"13","name":"Goo Goo","address":"Pazuntaung"},{"id":"14","name":"Test Name","address":"Hlaing"}]';

	$data = [
		'home'		=> "Myanmar Links",
		'another'	=> 'Test Another',
		'students'	=> $mystudents // json_encode(_db_get("students"))
	];

	_load_view("home", $data);
}

function BlogController() {

	_db_insert('students', [
		"name" => 'Goo Goo', 
		"address" => "Pazuntaung"]);
	_load_view("blog");
}

function PageController() {
	_db_insert('students', [
		'name' 		=> 'Test Name',
		'address'	=> "Hlaing"
	]);
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