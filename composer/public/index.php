<?php 

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Wpa29\App\Application as AppApplication;
use Wpa29\Foo\Application as FooApplication;
use Wpa29\Moo\Application as MooApp;

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

$app_application = new AppApplication();
$app_application->testCall();
$foo_application = new FooApplication();
$foo_application->testCall();
$moo_app = new MooApp();
$moo_app->testCall();









 ?>