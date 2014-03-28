<?php

function getFatalCount()
{

    $count = 0;

// Check Services
    $output = shell_exec('python /fyp/checks/servicechecker.py');
    $output = explode("#", $output);

    $count = count($output) - 1;

    return $count;

}

function getWarningCount()
{

    $count = 0;

$file="/fyp/parsers/snortAlerts";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

$count = $count + $linecount - 1;

$file="/fyp/parsers/apacheAlerts";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

$count = $count + $linecount - 1;
    return $count;

}

function getNoticeCount()
{

    $count = 0;

$file="/fyp/parsers/emailsSent";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

$count = $count + $linecount - 1;

    return $count;

}

?>
