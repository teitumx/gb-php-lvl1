<?php

$backspace = [
    " " => "_"
];

function change($string, $arr) 
{
    return strtr($string, $arr);
}

echo change("какой-то текст без пробелов", $backspace);

?>