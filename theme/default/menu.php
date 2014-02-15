<?php
$items = array(
"Modules",
"Configuration",
);?>
<div id="navcontainer">
<ul id="navlist">
<li><a href="index.php">Home Screen</a></li>
<?php foreach($items as $item):?>
<li><a href="<?php echo str_replace(" ","-",strtolower($item));?>.php"><?php echo $item;?></a></li>
<?php endforeach;?>
</ul>
</div>
