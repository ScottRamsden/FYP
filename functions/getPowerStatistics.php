<?php

// Today
$filename = '/fyp/power/today';
$fp = @fopen($filename, 'r');

if ($fp) {
    $array = explode("\n", fread($fp, filesize($filename)));

    $today = array();
    $count = 1;
    foreach ($array as $item) {
        if (!empty($item)) {
            if ($count == 1) {
                $today['pound'] = $item;
            }
            if ($count == 2) {
                $today['joules'] = $item;
            }
            $count = 2;
        }
    }
    if ($today['joules'] > 15267) {
        $today['status'] = 'Good';
    } else {
        $today['status'] = 'Bad';
    }
}

// Hour
$filename = '/fyp/power/hour';
$fp = @fopen($filename, 'r');

if ($fp) {
    $array = explode("\n", fread($fp, filesize($filename)));

    $hour = array();
    $count = 1;
    foreach ($array as $item) {
        if (!empty($item)) {
            if ($count == 1) {
                $hour['pound'] = $item;
            }
            if ($count == 2) {
                $hour['joules'] = $item;
            }
            $count = 2;
        }
    }
    if ($hour['joules'] > 558) {
        $hour['status'] = 'Good';
    } else {
        $hour['status'] = 'Bad';
    }
}

// Week
$filename = '/fyp/power/week';
$fp = @fopen($filename, 'r');

if ($fp) {
    $array = explode("\n", fread($fp, filesize($filename)));

    $week = array();
    $count = 1;
    foreach ($array as $item) {
        if (!empty($item)) {
            if ($count == 1) {
                $week['pound'] = $item;
            }
            if ($count == 2) {
                $week['joules'] = $item;
            }
            $count = 2;
        }
    }
    if ($week['joules'] > 106971) {
        $week['status'] = 'Good';
    } else {
        $week['status'] = 'Bad';
    }
}

// Month
$filename = '/fyp/power/month';
$fp = @fopen($filename, 'r');

if ($fp) {
    $array = explode("\n", fread($fp, filesize($filename)));

    $month = array();
    $count = 1;
    foreach ($array as $item) {
        if (!empty($item)) {
            if ($count == 1) {
                $month['pound'] = $item;
            }
            if ($count == 2) {
                $month['joules'] = $item;
            }
            $count = 2;
        }
    }
    if ($month['joules'] > 427887) {
        $month['status'] = 'Good';
    } else {
        $month['status'] = 'Bad';
    }
}

// Yesterday
$filename = '/fyp/power/yesterday';
$fp = @fopen($filename, 'r');

if ($fp) {
    $array = explode("\n", fread($fp, filesize($filename)));

    $yesterday = array();
    $count = 1;
    foreach ($array as $item) {
        if (!empty($item)) {
            if ($count == 1) {
                $yesterday['pound'] = $item;
            }
            if ($count == 2) {
                $yesterday['joules'] = $item;
            }
            $count = 2;
        }
    }
    if ($yesterday['joules'] > 15284) {
        $yesterday['status'] = 'Good';
    } else {
        $yesterday['status'] = 'Bad';
    }
}
