<?php

function curlRequest($request, $username, $password)
{

    $url = 'http://' . API_HOST . '/' . $request . '/' . $username . '/' . $password;
    log('Curl Request - ' . $url);
// Get cURL resource
    $curl = curl_init();
// Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'FYP API Requester'
    ));
// Send the request & save response to $resp
    $resp = curl_exec($curl);
// Close request to clear up some resources
    curl_close($curl);

    return $resp;

}