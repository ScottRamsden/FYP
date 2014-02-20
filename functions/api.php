<?php
session_start();

function apiInit($call = null, $user = null, $password = null)
{

    if ($call == null) {
        throw new Exception('Tried to make a call without setting $call variable');
    }

// Check if there is a session['apiKey'] and generate one if needed
    if ($_SESSION['apiKey']) {

        $checkKey = checkApiKey($_SESSION['apiKey']);

    } else {

        $key = getNewKey($user, $password);

        $_SESSION['apiKey'] = $key;

        $checkKey = checkApiKey($_SESSION['apiKey']);

    }

// If we have a valid key run our requested call
    if ($checkKey === true) {

        try {
            makeApiCall($call);
        } catch (Exception $e) {
            echo "Api Error - " . $e->getMessage() . "\n";
        }
    }
}

function getNewKey($user, $password)
{

    $url = $apiHost . '/getkey/' . $user . '/' . $password;

    // is cURL installed yet?
    if (!function_exists('curl_init')) {
        die('Sorry cURL is not installed!');
    }

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $output = curl_exec($ch);

    curl_close($ch);

    var_dump($output);
    die();

    return $output;
}

function checkApiKey()
{

    return true;
}

function makeApiCall()
{

}
