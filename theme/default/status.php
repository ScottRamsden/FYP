<?php

$notice = getNoticeCount();
$warning = getWarningCount();
$fatal = getFatalCount();


$total = $notice + $warning + $fatal;
?>

<h2>Device Statistics</h2>
<hr/>

<!-- Reports Logged -->

<div id="total" class="statistics">
<h4>Total Notifications</h4>
<button type="button" class="btn btn-default"><?php echo $total;?></button><br/>
</div>

<div id="notice" class="statistics">
<h4>Notices</h4>
<button type="button" class="btn btn-primary"><?php echo $notice;?></button>
</div>

<div id="warning" class="statistics">
<h4>Warnings</h4>
<button type="button" class="btn btn-warning"><?php echo $warning;?></button>
</div>

<div id="fatal" class="statistics">
<h4>Fatal</h4>
<button type="button" class="btn btn-danger"><?php echo $fatal;?></button>
</div>
