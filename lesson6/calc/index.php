<?php
require_once __DIR__ . '/config/lib.php';
$calcs = include __DIR__ . '/config/calcs.php';

$calcName = getCalc($calcs);

ob_start();
include __DIR__ . '/' . $calcName;
$content = ob_get_clean();

$html = file_get_contents('main.html');
echo str_replace('{{content}}', $content, $html);
