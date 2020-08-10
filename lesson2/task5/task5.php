<?php

$current_year = date ( 'Y' );
$year = file_get_contents('5.html');
$newyear = str_replace('{{YEAR}}', $current_year, $year);

echo $newyear;

?>