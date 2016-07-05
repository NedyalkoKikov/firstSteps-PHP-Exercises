<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$arr=[10,20,30,40];
for ($a = 0;$a < count($arr);$a++){
	$arr[$a] *= 2;
}
echo implode(",",$arr);
?>
</body>
</html>