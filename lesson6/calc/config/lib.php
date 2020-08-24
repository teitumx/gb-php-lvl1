<?php

function getCalc($calcs)
{
    $calcNumb = 1;
    if (!empty((int) $_GET['calc'])) {
        $calcNumb = (int) $_GET['calc'];
    }

    if (empty($calcs[$calcNumb])) {
        $calcNumb = 1;
    }

    return $calcs[$calcNumb];
}
