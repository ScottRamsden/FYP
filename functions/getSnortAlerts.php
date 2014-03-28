<?php

function getSnortAlerts()
{
$items = array();
$f = file_get_contents("/fyp/parsers/snortAlerts");

if($f != false){

$emails = explode("|",$f);

        foreach($emails as $email){
        if(strlen($email) != 1){
        $items[] = $email;
        }
        }

}


    return $items;

}

?>
