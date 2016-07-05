<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form>
		N:<input type="text" name="num"/>
		<input type="submit"/>
	</form>
	<?php
		if(isset($_GET['num'])){
			$num = intval($_GET['num']);
			for($n = $num;$n >= 1;$n--){
				echo "$n ";
			}
		}
	?>
</body>
</html>