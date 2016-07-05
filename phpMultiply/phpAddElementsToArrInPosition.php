<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$array = [10,20,30];
$array[4] = 100;
echo implode(',',$array);
echo "<br>\n";
echo $array[2];
?>
</body>
</html>