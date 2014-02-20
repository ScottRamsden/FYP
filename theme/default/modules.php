<div id="modulestats" class="homeblock">
    <h2>Module Status</h2>
    <hr/>
    <?php

    foreach ($modules as $module) {
        if ($module['status'] == true) {
            $onlineModules[] = $module;
        }
    }

    foreach ($onlineModules as $service) {
        exec("pgrep " . strtolower($service['key']), $pids, $running);

        if ($running == 0) {

            echo '<a href="/modules.php?module=' . $service['key'] . '"><button type="button" class="btn btn-success" style="margin:5px;">' . $service['name'] . ' is running</button></a>';
        } else {

            echo '<a href="/status.php"><button type="button" class="btn btn-danger" style="margin:5px;">' . $service['name'] . ' is not running</button></a>';
        }
    }

    ?>
</div>
