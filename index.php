<?php 
	$realIP = file_get_contents("http://ipecho.net/plain");
?>

<html>
	<head>
		<title>Hello!</title>
	</head>
	<body>
		<h1>Hello World</h1>
		<p>IP: <?php echo $realIP ?>
	</body>
</html>