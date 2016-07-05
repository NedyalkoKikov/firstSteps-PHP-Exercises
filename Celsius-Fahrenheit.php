<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
function celsiusToFahrenheit(float $degrees)
{
	return $degrees * 1.8 + 32;
}
function fahrenheitToCelsius(float $degrees)
{
	return ($degrees - 32) / 1.8;
}
if (isset($_GET['cel'])){
	$cel = floatval($_GET['cel']);
	$fah = celsiusToFahrenheit($cel);
	$resultFahr = "$cel &deg;C=$fah &deg;F";
}
if (isset($_GET['fah'])){
	$fah = floatval($_GET['fah']);
	$cel = fahrenheitToCelsius($fah);
	$resultCels = "$fah &deg;F=$cel &deg;C";
}
?>
<form>
	Celsius: <input type="number" name="cel"/>
	<input type="submit" value="Convert"/>
</form>
<?php if(isset($resultFahr)) echo $resultFahr ?>
<form>
	Fahrenheit: <input type="number" name="fah"/>
	<input type="submit" value="Convert"/>
</form>
<?php if (isset($resultCels)) echo $resultCels?>
</body>
</html>
