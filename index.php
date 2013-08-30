<html>
	<head>
		<title>FYP - <?php echo $companyName;?></title>
		<link rel="stylesheet" type="text/css" href="main.css">
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
	include 'theme/default/modules.php';
	}
	else{
	include 'theme/default/setup.php';
	}
	?>
	<div id="footer">
	Footer Text Here
	</div>
</div> 
</body>
</html>
