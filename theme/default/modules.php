<h2>Module Status</h2>
<hr/>
<?php

foreach($modules as $service){
exec("pgrep " . strtolower($service['key']), $pids,$running);

if($running == 0) {

        echo '<button type="button" class="btn btn-success" style="margin:5px;">' . $service['name'] .' is running</button>';
}
else{

	$count = $count + 1;

        echo '<button type="button" class="btn btn-danger" style="margin:5px;">' . $service['name'] .' is not running</button>';
}
}

$_SESSION['fatalCount'] = $count;

?>
