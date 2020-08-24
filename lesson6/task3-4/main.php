<?php
require('db.php');
$link = mysqli_connect('localhost', 'root', 'root', 'gbphp');
$result = mysqli_query($link, 'SELECT * FROM `gallery` ORDER BY `gallery`.`sees` DESC'); //получаем данные из таблицы и сортируем по просмотрам

see($link);

while($row = mysqli_fetch_assoc($result)) {
    echo <<<php
        <p><a href="see.php?view={$row['id']}" target="_blank"><img src="{$row['url']}" width="400"></a></p>
        <p> Просмотры: {$row['sees']}</p>
php; 

}

?>