<?php
	//Here we create some variables to see the result in the debug screen.
	session_start();
	SESSION["variable1"]="dog";
	SESSION["variable2"]="cat";
	SESSION["variable3"]="fox";
	SESSION["variable4"]= 245;
	SESSION["variable5"]= 333;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>Simple test page</title>
</head>
<body>
<h2>For see the debug screen enable popup and javascript in this page in your browser. Reload this page with the GET variable debug=on in the url </h2>
<?php
	include "ui_debug.php";
?>
</body>
</html>
