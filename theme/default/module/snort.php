<?php
/**
 * Created by PhpStorm.
 * User: Scott
 * Date: 18/01/14
 * Time: 22:19
 */

foreach ($modules as $module) {

    if ($module['key'] == $_GET['module']) {

        $status = $module['status'];

        if ($status == true) {
            $status = '<span style="color:green;text-decoration:underline;">Enabled</span>';
        } else {
            $status = '<span style="color:red;text-decoration:underline;">Offline</span>';
        }

    }

}

?>

<h2>Intrusion Detection System - <?php echo $_GET['module']; ?></h2>
<hr/>
<br/>
<h3>Configuration</h3>
<pre style="text-align:right;">
<form name="input" action="update.php" method="post">
<input type="hidden" name="file" value="snort"></input>
<textarea cols="103" rows="8" name="configData">
<?php
$contents = file_get_contents('/etc/snort/snort.conf');
echo $contents;
?>
</textarea>
<input type="submit" value="Submit">
</form>
Updates will not take affect until a reboot
</pre>
<br/>
<h3>Alert Viewer</h3>
<pre>
<?php
$errors = file_get_contents('/var/www/snort.log');
if($errors == ''){
echo 'Lucky you, there were no alerts!';
}
else{
echo $errors;
}
?></pre>

