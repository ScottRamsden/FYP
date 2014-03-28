<?php $offlineServices = getOfflineServices(); ?>
<div class="homeblock" id="notifications">
    <h2>Notifications</h2>
    <hr/>
    <h4>Listed in order of importance, description of the notice and a solution if avaliable.</h4>
    <br/>
    <hr/>
    <h3 style="color:red;">Offline Services</h3>

    <div style="text-align:center;">
        <?php
        foreach ($offlineServices as $service) {
            echo '<b>' . $service . ' </b>';
        }?>
    </div>
    <br/>
    <?php if (!empty($offlineServices)): ?>
        <h4>Solution</h4>
        <p>Please restart your FYP Device, early hours are better</p>
    <?php endif; ?>
    <hr/>

    <?php $snortAlerts = getSnortAlerts(); ?>
    <h3 style="color:orange;">Snort Alerts</h3>

    <div style="text-align:center;">
        <?php
        foreach ($snortAlerts as $alert) {
            echo '<b>' . $service . ' </b>';
        }?>
    </div>
    <br/>
    <?php if (!empty($snortAlerts)): ?>
        <h4>Solution</h4>
        <p>Please restart your FYP Device, early hours are better</p>
    <?php endif; ?>
    <hr/>
    <?php $apacheAlerts = getApacheAlerts(); ?>
    <h3 style="color:orange;">Apache Alerts</h3>

    <div style="text-align:center;">
        <?php
        foreach ($apacheAlerts as $alert) {
            echo '<b>' . $service . ' </b>';
        }?>
    </div>
    <br/>
    <?php if (!empty($apacheAlerts)): ?>
        <h4>Solution</h4>
        <p>Please restart your FYP Device, early hours are better</p>
    <?php endif; ?>
    <hr/>
    <?php $sentEmails = getSentEmails(); ?>
    <h3 style="color:blue;">Emails Sent</h3>

    <div style="text-align:center;">
        <?php
        foreach ($sentEmails as $email) {
            echo '<b>' . $service . ' </b>';
        }?>
    </div>
    <br/>
    <?php if (!empty($sentEmails)): ?>
        <h4>Solution</h4>
        <p>Please restart your FYP Device, early hours are better</p>
    <?php endif; ?>
    <hr/>
</div>
