<h2>Module Status</h2>
<hr/>
<?php

foreach($modules as $service){
exec("pgrep " . strtolower($service['key']), $pids);
if(!empty($pids) && !empty($service['key'])) {

    	// snort is running!
        echo '<button type="button" class="btn btn-success">' . $service['name'] .' is running</button></br></br>';
}
elseif(empty($pids) && !empty($service['key'])){
$allServicesOnline = 1;
        echo '<button type="button" class="btn btn-warning">' . $service['name'] .' is not running</button></br></br>';
}
}
?>
