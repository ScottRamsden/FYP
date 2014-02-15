<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 18/01/14
 * Time: 22:19
 */

foreach($modules as $module){

	if($module['key'] == $_GET['module']){

	$status = $module['status'];

	if($status == true){
	$status = '<span style="color:green;text-decoration:underline;">Enabled</span>';
	}
	else{
	$status = '<span style="color:red;text-decoration:underline;">Offline</span>';
	}

	}

}

?>

<h2>Service Viewer - <?php echo $_GET['module'];?></h2>
<hr/>

<h3><?php echo $status;?></h3>
<br/>
<h3>Log Viewer</h3>
<pre>
<?php
$file=fopen("error.log","r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
  echo fgets($file). "<br>";
  }
fclose($file);
?></pre>
