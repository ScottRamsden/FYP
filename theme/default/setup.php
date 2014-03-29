<?php
if ($_GET['setupfinished'] == 1) {

    $configFile = "/var/www/live/fyp/config/config.php";
    file_put_contents($configFile, 'configgg');

    $variablesFile = "config/variables.php";
    file_put_contents($variablesFile, 'configggg');

    echo '<p id="setupfinished">Setting up FYP</p>';

    header('Location: ' . $_SERVER['PHP_SELF']);

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
<p class="arrow_box" id="restartsetup"><u>Restart Setup Process</u></p>

<div id="setup">

    <form action="?setupfinished=1" method="post">

        <div id="start">
            <div class="jumbotron">
                <h1 style="border-bottom:solid 1px #999;padding-bottom:10px;margin-top:0px;margin-bottom:20px;">Setup
                    Process!</h1>

                <p>This is the start of the setup process, press the button below to start the setup.</p>

                <p>Here is a quick run down of what you will need to fully setup this device. If you do <b>not</b>
                    understand or have any of the details below, please do not continue.</p>

                <ul class="list-group">
                    <li class="list-group-item">Required Module List</li>
                    <li class="list-group-item">Device Configuration Variables</li>
                    <li class="list-group-item">Network Knowledge</li>
                </ul>

                <br/>

                <div id="nextstep" class="start">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </div>
            </div>
        </div>

        <div id="step1">
            <div class="jumbotron">
                <h1 style="border-bottom:solid 1px #999;padding-bottom:10px;margin-top:0px;margin-bottom:20px;">Step
                    1</h1>
                <h4>Select the modules you want to use on your device</h4>
                <?php foreach ($modules as $module): ?>
                    <input type="checkbox" name="<?php echo $module; ?>"
                           value="<?php echo $module; ?>"><?php echo $module; ?><br>
                <?php endforeach; ?>
                <br/>

                <div id="nextstep" class="one">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </div>
            </div>
        </div>

        <div id="step2">

            <div class="jumbotron">
                <h1 style="border-bottom:solid 1px #999;padding-bottom:10px;margin-top:0px;margin-bottom:20px;">Step
                    2</h1>
                <h4>Accept the Terms and Conditions</h4>

                <input type="checkbox" name="terms" value="0">I Accept the <a href="#">Terms and Conditions</a><br>

                <br/>

                <div id="nextstep" class="finish">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </div>
            </div>
        </div>

        <div id="setupfinish">

            <div class="jumbotron">
                <h1 style="border-bottom:solid 1px #999;padding-bottom:10px;margin-top:0px;margin-bottom:20px;">Setup
                    Finalize</h1>

                <input type="submit" value="Complete Setup">

    </form>

</div>
</div>
