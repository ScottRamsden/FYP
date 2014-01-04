
<?php
$modules =
array(
"Snort",
"Nessus",
"NAS",
"Keepass"
);
?>

<script src="theme/default/setup/setup.js"></script>
<div id="setup">


<div id="start">
<h2>Setup Process</h2>
<h4>This is the start of the setup process</h4>
<p>
Press the button to go to step 1
</p>
<br/>
<div id="nextstep" class="start">
>
</div>
</div>
<div id="step1">
<h2>Step 1</h2>
<h4>Select the modules you want to use on your device</h4>
<div id="modules">
<?php foreach($modules as $module):?>
<input type="checkbox" name="<?php echo $module;?>" value="<?php echo $module;?>"><?php echo $module;?><br>
<?php endforeach;?>
</div>
<br/>
<div id="nextstep" class="one">
>
</div>
</div>

</div>
