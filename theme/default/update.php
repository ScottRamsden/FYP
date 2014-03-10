<?php if($_POST['submitted']):?>
// Make curl request
// If new key required
// Request new key with details
// Make getuser request again
// If valid data
// Parse data into vars
// Push vars into the variables.php config
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
