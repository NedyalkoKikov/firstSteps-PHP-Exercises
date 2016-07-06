<?php
$ages = ["Nakov" => 26,"Kiro"=>22,"Maria"=>30];
$ages["Klqnko"] = "25";
unset($ages['Kiro']);
foreach ($ages as $name => $age){
	echo "$name is $age years old.<br>\n";
}
?>