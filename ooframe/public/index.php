<?php 
define("DD", realpath("../"));

require DD . "/wpa29/database.php";

$students = DB::table("students")->get();
var_dump($students);

 ?>