
<!DOCTYPE HTML> 

<html lang="en"> 

<!--
*(c) Copyright 2011 Simone Masiero. Some Rights Reserved. 
*This work is licensed under a Creative Commons Attribution-Noncommercial-Share Alike 3.0 License
-->

	<head> 

		<meta charset="utf-8"> 

		<title>Hacker Typer</title>

		<link href="style.css" rel="stylesheet" type="text/css" /> 

		<script src='jquery.min.js' type='text/javascript'></script> 

		<script src='script.js' type='text/javascript'></script> 

		<script type='text/javascript'>

			Typer.speed=3;

			Typer.file='<?php if(isset($_GET['file'])){echo $_GET['file'];}else{echo 'kernel.txt';}?>';
			Typer.init();

		</script>

	</head> 

	<body> 

		<div id='console'></div>

	</body>

</html>
