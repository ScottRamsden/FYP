<?php


include 'config/config.php';

// Load $modules from /fyp/modules/enabled & /fyp/modules/disabled

$modules = array();

// Enabled
$enabled = file_get_contents('/fyp/modules/enabled', true);

$enabledLines = explode("#", $enabled);

// Disabled
$disabled = file_get_contents('/fyp/modules/disabled', true);

$disabledLines = explode("#", $disabled);

// Format $enabledLines & $disabledLines

foreach ($enabledLines as $eline) {

    $eline = explode("/", $eline);

    $modules[] = array(
        "name" => $eline[0],
        "key" => $eline[1],
        "status" => true
    );

}

foreach ($disabledLines as $dline) {

    $dline = explode("/", $dline);

    $modules[] = array(
        "name" => $dline[0],
        "key" => $dline[1],
        "status" => false
    );

}

const API_ID = 1;

const USERNAME = 'scottramsdenold';

const API_HOST = 'runforthe33.co.uk';
$companyName = 'ScottRamsden.co.uk';
$footer = 'For your protection - Scott Ramsden - <u>Development Account</u>';

?>
