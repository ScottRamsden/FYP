<?php
if($_GET['setupfinished'] == 1){

$configFile = "config/config.php";
$createConfFile = fopen($configFile, 'w') or die('Please Contact scott@scottramsden.co.uk');

$variablesFile = "config/variables.php";
$createVarFile = fopen($variablesFile, 'w') or die('');

echo '<p id="setupfinished">Setting up FYP</p>';

header('Location: '.$_SERVER['PHP_SELF']);

exit;
}
?>

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

<p id="restartsetup">Restart Setup Process</p>

<div id="setup">

<form action="?setupfinished=1" method="post">

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

<div id="step2">
<h2>Step 2</h2>
<h4>Accept the Terms and Conditions</h4>

<input type="checkbox" name="terms" value="0">I Accept the <a href="#">Terms and Conditions</a><br>

<br/>
<div id="nextstep" class="finish">
>
</div>
</div>

<div id="setupfinish">
<h2>Setup Finalize</h2>

<input type="submit" value="Complete Setup">

</form>

</div>
