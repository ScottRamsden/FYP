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

    return $count;

}

function getNoticeCount()
{

    $count = 0;

    return $count;

}

?>
