<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Laboration 2');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));

$name = $_GET['name'];
$log->info($name);
?>
<!DOCTYPE html>
<html>
<head>
<title>Testing, lab2</title>
<link rel="stylesheet" type="text/css" href="background.css">
</head>
<body>
<?php
echo "Hello, " . $name;
?>
</body>
</html>
