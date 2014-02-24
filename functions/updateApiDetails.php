<?php

function getCurrentData($key) {
$curl = curl_init();

    $apiHost = API_HOST;
    $url = $apiHost . '/getconfig/' . $key;

curl_setopt_array($curl, array(
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => $url,
CURLOPT_USERAGENT => 'FYP'
));

$resp = curl_exec($curl);
curl_close($curl);

    // Error Checking
    if($resp != 'validdatastring'){
        switch($resp)
        {
            case 'loginerrormessage':
                // Throw Login Exception
                throw new Exception('');
            case 2:
                //something else
            default:
                // unknown error! log and request a log pull from central,
                //@TODO Custom Logger and some kind of alert to central server
        }

    }

return $resp;
}

// Request for all account data
try{
    $key = $_SESSION['apikey'];
    $data = getCurrentData($key);
}
catch(Exception $e){
    switch($e)
    {
        case 'loginerror':
            // We need to re-auth
            $key = getNewKey('','');
            //@TODO Add something so that this function cannot be ran more than once
            getCurrentData($key);
        default:
            // unknown error! log and request a log pull from central,
            //@TODO Custom Logger and some kind of alert to central server
    }
}

// Take vars and update the config file with new data