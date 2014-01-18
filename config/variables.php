<?php


include 'config/config.php';

$modules = array
  (
  array(
"name" => "Nessus Scanner",
"status" => true,
"key" => "nessus"
	),
  array(
"name" => "Snort IDS",
"status" => true,
"key" => "snort"
	),
  array(
"name" => "OpenVAS",
"status" => false,
"key" => "openvas"
	),
  array(
"name" => "Wikki",
"status" => false,
"key" => "nikko"
	),
  array(
"name" => "Web Server",
"status" => true,
"key" => "apache2"
	),
  );

$companyName = 'ScottRamsden.co.uk';
$footer = 'ScottRamsden.co.uk - 2014';

?>
