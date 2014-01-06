<?php
	if(file_exists("config/config.php")){
	// Include Setup Variables
	include 'config/variables.php';
	}
	else{
	// Include Default Variables
	include 'config/default.variables.php';
}
?>
<html>
	<head>
		<title>FYP - <?php echo $companyName;?></title>
		<link rel="stylesheet" type="text/css" href="main.css">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
<body>
<script>
var screenWidth = window.screen.width;
</script>
<div id="container">
	<div id="header">
		<img src="http://placehold.it/350x150&text=FYP"/>
	</div>
	<?php
	if(file_exists("config/config.php")){
	include 'theme/default/menu.php';
	}
	?>
	<div id="page">
	<?php
	if(file_exists("config/config.php")){
	// Include Modules Content
	include 'theme/default/modules.php';
	}
	else{
	// Include Setup Process
	include 'theme/default/setup.php';
	}
	?>
	</div>
	<?php
	if(file_exists("config/config.php")){
	include 'theme/default/status.php';
	}
	?>
	<div id="footer">
	<?php echo $footer;?>
	</div>
</div> 
</body>
</html>
