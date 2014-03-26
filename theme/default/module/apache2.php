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

<h2>Web Server - <?php echo $_GET['module']; ?></h2>
<hr/>
<br/>
<h3>Configuration</h3>
<pre style="text-align:right;">
<form name="input" action="demo_form_action.asp" method="post">
    <textarea cols="103" rows="8" name="snortConfig">
        <?php
        $contents = file_get_contents('/etc/apache2/apache2.conf');
        echo $contents;
        ?>
    </textarea>
    <input type="submit" value="Submit">
</form>
Updates will not take affect until a reboot
</pre>
<br/>
<h3>Log Viewer [Logs reported in the past week]</h3>
<pre>
<?php
$errors = file_get_contents('error.log');
if($errors == ''){
echo 'Lucky you, there were no errors!';
}
else{
echo $errors;
}
?></pre>
