<?php


$hour = array(
'pound' => 11,
'joules' => 15,
'status' => 'Good'
);

$week = array(
'pound' => 11,
'joules' => 15,
'status' => 'Good'
);

$month = array(
'pound' => 11,
'joules' => 15,
'status' => 'Good'
);

$yesterday = array(
'pound' => 11,
'joules' => 15,
'status' => 'Good'
);

// Today
$filename = '/fyp/power/today';
$fp = @fopen($filename, 'r'); 

if ($fp) {
   $array = explode("\n", fread($fp, filesize($filename)));
}
$today = array();
$count = 1;
foreach($array as $item){
if(!empty($item)){
if($count == 1){
$today['pound'] = $item;
}
if($count == 2){
$today['joules'] = $item;
}
$count = 2;
}
}
if($today['joules'] > 5){
$today['status'] = 'Good';
}
else{
$today['status'] = 'Bad';
}

