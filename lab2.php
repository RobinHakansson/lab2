<?php
require("vendor/autoload.php");

use GuzzleHttp\Client;

// Skapa en HTTP-client
$client = new Client();

// Anropa URL: http://unicorns.idioti.se/
$res = $client->request('GET', 'http://unicorns.idioti.se/10', ['headers' => ['Accept' => 'application/json']]);


// Omvandla JSON-svar till datatyper
$data = json_decode($res->getBody());



// @TODO Gör något fantastiskt med vår data!


?>
<!DOCTYPE html>
<html>
<head>
<title>Testing, lab2</title>
<link rel="stylesheet" type="text/css" href="background.css">
</head>
<body>
<?php
echo "Data: " . $data->name . PHP_EOL;
?>
</body>
</html>
