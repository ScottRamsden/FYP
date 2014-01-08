<h2>Enabled Modules</h2>

<?php foreach($modules as $module){
if($module['status'] == 1){
echo '<pre style="height:55px;"><button style="float:left;" type="button" class="btn btn-primary">' . $module['name'] . '</button> <div style="float:right;"><a href="#">Configure</a> | <a style="color:red;" href="#">Disable</a></div><br/></pre><br/>';
}
} ?>
<h2>Avaliable Modules</h2>

<?php foreach($modules as $module){
if($module['status'] == 2){
echo '<pre style="height:55px;"><button style="float:left;" type="button" class="btn btn-primary">' . $module['name'] . '</button> <div style="float:right;"><a href="#">Configure</a> | <a style="color:green;" href="#">Enabled</a></div><br/></pre><br/>';
}
} ?>
<br/><br/>
<br/><br/>
<pre>For more modules please visit <a href="http://www.foryourprotection.co.uk">www.foryourprotecion.co.uk</a>.</pre>
