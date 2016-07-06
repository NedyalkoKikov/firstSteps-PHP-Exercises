<?php
date_default_timezone_set('Europe/Sofia');
$Date = new DateTime('NOW');
echo $Date->format("d-M-Y H:i");
echo "<br>";
$Date = $Date->modify('+1 day');
echo $Date->format("d-M-Y H:i");
?>