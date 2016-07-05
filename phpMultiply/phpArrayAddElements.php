<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$arr = [1,2,3,4];
array_push($arr,5,6,7,8);
echo implode(",",$arr);
?>
</body>
</html>