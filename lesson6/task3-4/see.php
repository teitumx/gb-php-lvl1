<?php
require('db.php');
$res = mysqli_query($link, 'SELECT * FROM `gallery` WHERE `id` = ' . (int) $_GET['view']);
see($link);
while ($row = mysqli_fetch_assoc($res)) {
    echo <<<php
        <p><img src="{$row['url']}"></a></p>
        <p> Просмотры: {$row['sees']}</p>
        <form action="" method="POST">
        Имя: <input type="text" name="name" placeholder="Имя"><br><br>
        Комментарий: <textarea name="comment"></textarea>
        <input type="submit">
        </select>
    </form>
php;

    if (!empty($_POST)) {
        $name = $_POST['name'];
        $date = date("d.m.Y");
        $comment = $_POST['comment'];
        $img_id = $_GET['view'];
        $sql = "INSERT INTO `comments` (`name`, `date`, `comment`, `img_id`) VALUES ('{$name}', '{$date}', '{$comment}', '{$img_id}');";
        mysqli_query($link, $sql);

        echo <<<php
        <hr>
        <h3>Имя: {$name}</h3>
        <h3> Дата: {$date}</h3>
        <p>{$comment}</p>
php;
    }
}
