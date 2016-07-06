<?php
$lang = 'PHP';
$str  = "i love $lang<br>\n";
echo $str;
$broken = "i love $lang<br>\n";
echo $broken;
$tokens = explode(',', 'PHP,,, SQL,HTML,JAVA');
$tokens = array_filter(array_map('trim',$tokens));
echo strtolower(implode(' - ',$tokens));
?>