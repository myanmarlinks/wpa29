<?php 

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(DD. "/log/composer.log", Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
// chmod -R 777 log
TestCall();


$dog = new Dog();
$dog->bark();
$cat = new Cat();
$cat->meow();








 ?>