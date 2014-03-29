<h2>Progress</h2>
<hr/>

<?php
$progress = 1;
$app = $_POST['file'];
if ($app == 'samba') {
    $file = '/etc/samba/smb.backup.conf';
    $currentFile = '/etc/samba/smb.conf';
} else {
    $file = '/etc/' . $app . '/' . $app . '.backup.conf';
    $currentFile = '/etc/' . $app . '/' . $app . '.conf';
}
// Open the file to get existing content
$current = file_get_contents($currentFile);
// Write the contents to the backup file
$o = file_put_contents($file, $current);

if ($current === false || $o === false) {
    $error = 'Couldnt open ' . $app . '.conf file';
}
?>

<p><b>1</b> - Backing up the current config file</p>

<hr/>

<?php
$progress = 2;
$newConfig = $_POST['configData'];
$o = file_put_contents($currentFile, $newConfig);
if ($o === false) {
    $error = 'Couldnt update the current config, permissions?';
}
?>

<p><b>2</b> - Pushing the new config file into the current config file</p>

<hr/>

<pre>

<?php
if (empty($error)) {

	// Push notice for config update

	file_put_contents("/fyp/parsers/emailsSent","[" . date('Y-m-d H:i:s') . "] " . $app . " config updated|" , FILE_APPEND);

    echo 'Completed, config file successfully updated';
} else {
    echo "There was an error at step " . $progress . "\nError - " . $error . "\n";
}
?>
