<?php
$success = false;

$enabled = explode("\n", file_get_contents('/fyp/modules/enabled'));
$disabled = explode("\n", file_get_contents('/fyp/modules/disabled'));
$count = 0;
if($_GET['enableModule']){
	$_GET['enableModule'] = str_replace("#","",$_GET['enableModule']);
	foreach($disabled as $item){
		if($item == $_GET['enableModule']){
		log('Attempting to enable ' . $item);

		try{
		unset($disabled[$count]);

		$count = $count + 1;

		$fh = fopen( '/fyp/modules/disabled', 'w' );
		fclose($fh);

		file_put_contents('/fyp/modules/disabled', $disabled);
		file_put_contents('/fyp/modules/enabled', $_GET['enableModule'] . '#', FILE_APPEND);
		$success = true;
		}
		catch(Exception $e){
		$array = $e->getMessage();
		}
		}
	}
}

if($_GET['disableModule']){
foreach($enabled as $item){
if($item == $_GET['disableModule']){
log('Attempting to disable ' . $item);
}
}
}

?>

<h3>Processing your request...</h3>
<hr/>
<?php if($success != true):?>
<p>There was a error, message below</p>
<br/>
<br/>
<pre><?php var_dump($array);?></pre>
<?php else:?>
<p>Successfully <?php if($_GET['enableModule']){echo 'enabled ';} if($_GET['disableModule']){echo 'disabled ';} echo $_GET['disableModule']; echo $_GET['enableModule'];?></p>
<?php endif;?>
<hr/>
