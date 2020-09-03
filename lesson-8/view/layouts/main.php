<?php

/**
 * @var string $msg
 * @var string $content
 * @var int $goodCount
 * @var string $title
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <ul>
        <li><a href="?page=1">Главная</a></li>
        <li><a href="?p=user">Пользователи</a></li>
        <li><a href="?p=auth">Вход</a></li>
        <li><a href="?p=cart">Корзина<span class="count">(<?= $goodCount ?>)</span></a></li>
        <?php if (isAuth()) : ?>
            <li><a href="?p=myorders&a=index">Мои заказы</a></li>
        <?php endif; ?>
        <li><a href="?p=good&a=all">Товары</a></li>
        <p style="color: red"><?= $msg ?></p>
        <?= $content ?>
        <script src="/lesson8/public/js/script.js"></script>
</body>

</html>