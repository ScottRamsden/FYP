<?php

$modules =
    array(
        "Snort",
        "Nessus",
        "NAS",
        "Keepass"
    );
?>
<h2>Step 1</h2>
<h4>Select the modules you want to use on your device</h4>
<div id="modules">
    <form action="step2.php" method="post">
        <?php foreach ($modules as $module): ?>
            <input type="checkbox" name="<?php echo $module; ?>" value="<?php echo $module; ?>"><?php echo $module; ?>
            <br>
        <?php endforeach; ?>
</div>
<br/>
<div id="nextstep">
    <input class="next" type="submit" value=">"/>
</div>
</form>
