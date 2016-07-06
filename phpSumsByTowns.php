<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form>
	<textarea rows="10" name="towns-incomes"></textarea>
	<br>
	<input type="submit" value="Calculate">
</form>
<?php
if(isset($_GET['towns-incomes'])){
	$lines = array_map('trim',explode("\n",$_GET['towns-incomes']));
	$sums = sumIncomes($lines);
	var_dump($sums);
}
function sumIncomes(array $lines) : array
{
	$sums = [];
	foreach ($lines as $line){
		$tokens = explode(':',$line);
		$town = $tokens[0];
		$income = floatval($tokens[1]);
		if(isset($sums[$town])){
			$sums[$town] += $income;
		}
		else{
			$sums[$town] = $income;
		}
		ksort($sums);
		return $sums;
	}
}
?>
</body>
</html>