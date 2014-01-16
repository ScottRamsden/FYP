<?php


include 'config/config.php';

$modules = array
  (
  array(
"name" => "Nessus Scanner",
"status" => 1,
"key" => "nessus"
	),
  array(
"name" => "Snort IDS",
"status" => 1,
"key" => "snort"
	),
  array(
"name" => "OpenVAS",
"status" => 1,
"key" => "openvas"
	),
  array(
"name" => "Wikki",
"status" => 1,
"key" => "nikko"
	),
  array(
"name" => "Web Server",
"status" => 1,
"key" => "apache2"
	),
  array(
"name" => "Volvasdo",
"status" => 2
	),
  array(
"name" => "Vosalvo",
"status" => 2
	),
  );

$companyName = 'ScottRamsden.co.uk';
$footer = 'ScottRamsden.co.uk - 2014';

?>
