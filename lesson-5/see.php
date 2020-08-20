<?php
require('db.php');
$res = mysqli_query($link, 'SELECT * FROM `gallery` WHERE `id` = ' . (int) $_GET['view']);
see($link);
while($row = mysqli_fetch_assoc($res)) {
    echo <<<php
        <p><img src="{$row['url']}"></a></p>
        <p> Просмотры: {$row['sees']}</p>

php; 
}
?>