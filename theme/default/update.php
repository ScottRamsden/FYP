<?php if($_POST['submitted']):?>
<?php
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://' . 'runforthe33.co.uk' . '/getuser/' . $_POST['username'] . '/' . $_POST['password'],
    CURLOPT_USERAGENT => 'FYP API Request',
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

// If new key required
// Request new key with details
if(strpos($resp,'outdated') || strpos($resp,'invalid:key')){
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://' . 'runforthe33.co.uk' . '/auth/' . $_POST['username'] . '/' . $_POST['password'],
    CURLOPT_USERAGENT => 'FYP API Request',
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

$resp = explode(':',$resp);
$resp = $resp[1];

session_start();
$_SESSION['apiKey'] = $resp;
$key = $resp;
}
else{
var_dump($resp);
}
// Make getuser request again
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://' . 'runforthe33.co.uk' . '/getuser/' . $_POST['username'] . '/' . $key,
    CURLOPT_USERAGENT => 'FYP API Request',
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
// If valid data
if(strpos($resp,'outdated') || strpos($resp,'invalid:key')){
echo 'There was a issue getting your account details';}
else{
$data = $resp;
}
// Parse data into vars
// Push vars into the variables.php config
?>

<?php
// We have data response from the API lets show it to the user and initiate a update
if($data):?>
<h2>Account Information</h2>
<hr/>
<p><b>We have the following information about your account</b></p>
<p><?php echo $data;?></p>

<br/><hr/>
<h4 style="text-align:center;">Successfully updated your config file with up to date information</h4>
<hr/>
<br/>
<?php endif;?>

<?php else:?>

<h3>Current Account Info</h3>
<hr/>
<pre>
<p>ID : <?php echo API_ID;?></p>
<p>Username : <?php echo USERNAME;?></p>
</pre>
<h3>Update Info</h3>
<hr/>
<form name="input" action="/update.php" method="post">
<input type="hidden" name="submitted" value="1">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password">
<input type="submit" value="Submit">
</form>
<br/>
<hr/>
<?php endif;?>
