<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form>
	<input type="submit" name="on" value="on"/>
	<input type="submit" name="off" value="off"/>
</form>
<?php
if(isset($_GET['on'])){
	onFunc();
}
if (isset($_GET['off'])){
	offFunc();
}
function onFunc(){
	echo "Botton on Clicked";
}
function offFunc(){
	echo "Button off Clicked";
}
?>
</body>
</html>