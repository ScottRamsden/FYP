<?php if ($_POST['submitted']): ?>

    <?php if (empty($_POST['username']) || empty($_POST['password'])) {
        die('Please check the username and password fields');
    }?>

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

// Request new key with details
    if (strpos($resp, 'outdated') || strpos($resp, 'invalid:key')) {

	echo 'Regenerated a 30 min key for user ' . $_POST['username'];

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

        $resp = explode(':', $resp);
        $resp = $resp[1];

        session_start();
        $_SESSION['apiKey'] = $resp;
        $key = $resp;
	echo ' - ' . $key;
    } else {
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
    if (strpos($resp, 'outdated') || strpos($resp, 'invalid:key')) {
        echo '<p>There was a issue getting your account details</p>';
    } else {
        $data = $resp;
    }
// Parse data into vars
    $data = explode("|", $data);
// Push new vars into the variables.php config

	$newUsername = $data[1];
	$newId = $data[0];

// Change this to return array of each line
	$file = file_get_contents('/var/www/config/variables.php');
	$configArray = explode("\n",$file);
//
	$count = 0;
	foreach($configArray as $line){
	if(strpos($line , "const USER_NAME = ") !== false){
	$configArray[$count] = "const USER_NAME = '" . $newUsername . "';";
	}
	if(strpos($line , "const API_ID = ") !== false){
	$configArray[$count] = "const API_ID = " . $newId . ";";
	}
	$count = $count +1;
	}

	$contents = implode("\n", $configArray);

// Write new config to file
    $fp = file_put_contents('/var/www/config/variables.php', $contents);
    if ($fp === false || $fg === false) {
        die('<p>Error Getting/Putting new variables</p>');
    }
    ?>

<?php
// We have data response from the API lets show it to the user and initiate a update
    if ($data):?>
        <h2>Account Information</h2>
        <hr/>
        <p><b>We have the following information about your account</b></p>
        <p>
            <?php
            echo '<p>Account ID - ' . $data[0] . '</p>';
            echo '<p>Username - ' . $data[1] . '</p>';
            echo '<p>Email - ' . $data[2] . '</p>';
		?>
        </p>
        <br/>
        <hr/>
        <h4 style="text-align:center;">Successfully updated your config file with up to date information</h4>
        <hr/>
        <br/>
    <?php endif; ?>

<?php else: ?>

    <h3>Current Account Info</h3>
    <hr/>
    <pre>
<p>ID : <?php echo API_ID; ?></p>
<p>Username : <?php echo USER_NAME; ?></p>
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

<?php endif; ?>
