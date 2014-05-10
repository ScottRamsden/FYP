<?php

$currentID = API_ID;
$username = USER_NAME;
// Form Submitted
if ($_POST['submitted']) {
    $update = 1;
}

?>
<h2>FYP - Configuration</h2>
<hr/>
<p style="text-align: center;">Please read the <a href="/documentation.php">user guide</a> before making changes, changes are irreversible.</p>
<hr/>
<?php if ($update == 1): ?>
    <p style="text-align: center;" class="text-success">Successfully Update your Configuration</p>
<?php endif; ?>

<?php if ($update == 2): ?>
    <p style="text-align: center;" class="text-danger">There was a problem, please contact your support team.</p>
<?php endif; ?>
<br/>
<div id="config-form">

<pre>
    <a href="/update.php"><p style="text-align: center;">Get/Update Account Data</p></a>
    <br/>
</pre>

    <br/>
    <hr/>
    <br/>

    <h4>Account Details</h4>
    <br/>

<pre>
<b>ID : </b><?php echo $currentID; ?>
<b>Username : </b><?php echo $username; ?>
</pre>

    <br/>
    <hr/>
    <br/>

    <h4>Site Configuration</h4>
    <div id="siteConfig" style="text-align: left;">
    <form action="" method="post" class="form-horizontal" role="form">
        <input type="hidden" name="submitted" value="1"/>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Company Name</label>

            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="<?php echo $companyName; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Footer Text</label>

            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="<?php echo $footer; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Save Changes</button>
            </div>
        </div>
    </form>
    </div>
</div>
