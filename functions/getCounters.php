<?php

function getFatalCount(){

$count = 0;

$count = $_SESSION['fatalCount'];

return $count;

}

function getWarningCount(){

$count = 0;

return $count;

}

function getNoticeCount(){

$count = 0;

return $count;

}
?>
