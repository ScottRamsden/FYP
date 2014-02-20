<?php

$notice = getNoticeCount();
$warning = getWarningCount();
$fatal = getFatalCount();


$total = $notice + $warning + $fatal;
?>
<div id="statistics" class="homeblock">
    <h2>Device Statistics</h2>
    <hr/>

    <!-- Reports Logged -->

    <div id="total" class="statistics">
        <h4>Total Notifications</h4>
        <a href="/status.php">
            <button type="button" class="btn btn-default"><?php echo $total; ?></button>
            <br/>
        </a>
    </div>

    <div id="notice" class="statistics">
        <h4>Notices</h4>
        <a href="/status.php#notice">
            <button type="button" class="btn btn-primary"><?php echo $notice; ?></button>
        </a>
    </div>

    <div id="warning" class="statistics">
        <h4>Warnings</h4>
        <a href="/status.php#warnings">
            <button type="button" class="btn btn-warning"><?php echo $warning; ?></button>
        </a>
    </div>

    <div id="fatal" class="statistics">
        <h4>Fatal</h4>
        <a href="/status.php#fatal">
            <button type="button" class="btn btn-danger"><?php echo $fatal; ?></button>
        </a>
    </div>
</div>
