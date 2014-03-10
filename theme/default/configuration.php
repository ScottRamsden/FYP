<?php

$currentID = API_ID;

// Form Submitted
if ($_POST['submitted']) {
    $update = 1;
}

?>
<h2>FYP - Configuration</h2>
<hr/>
<p>Please read the <a href="#">user guide</a> before making changes, if you dont know what your changing here leave it
    alone.</p>
<hr/>
<?php if ($update == 1): ?>
    <p class="text-success">Sucessfully Update your Configuration</p>
<?php endif; ?>

<?php if ($update == 2): ?>
    <p class="text-danger">There was a problem, please contact your support team.</p>
<?php endif; ?>
<br/>
<div id="config-form" class="">

	<a href="/update.php"><p>Get/Update Account Data</p></a>

	<br/>

    <h4>Your Account</h4>

<pre>
<p><b>ID : </b><?php echo $currentID; ?></p>
<p><b>Username : </b><?php echo $username;?></p>
</pre>

    </br>
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
