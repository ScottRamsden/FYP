<?php

function getOfflineServices(){

// Check Services
$output = shell_exec('python /fyp/checks/servicechecker.py');
$output = explode("#",$output);

return $output;

}
?>
