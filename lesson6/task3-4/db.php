<?php

$link = mysqli_connect('localhost', 'root', 'root', 'gbphp');

function see($link){

    if (empty($_GET['view'])) {
        return;
    } 
    $id = (int)$_GET['view'];
    $sql = "UPDATE `gallery` SET `sees` = `sees` + 1  WHERE id = {$id}";
    mysqli_query($link, $sql); 
}
