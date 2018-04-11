<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Laboration 1');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));

$log->info("Hello ".$argv[1]."! What a wonderful name!");


echo "Log complete!";
// echo "Hello ".$argv[1]."! What a wonderful name!";

// var_dump($argv);
?>
