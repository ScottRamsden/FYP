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

<h3><?php echo $status; ?></h3>
<hr/>
<a id="trans">Nessus Control panel</a>
<script>
    document.getElementById('trans').href = 'http://' + window.location.origin + ':8081';
</script>
