<?php

function getOfflineServices()
{

$items = array();

// Check Services
    $output = shell_exec('python /fyp/checks/servicechecker.py');
	$output = explode("#",$output);
	foreach($output as $item){
	$items[] = $item;
}
    return $items;

}

?>
