<?php

/**
 * @var array $good
 */
?>
<h1><?= $good['name'] ?></h1>
<p><?= $good['info'] ?></p>
<h4><?= $good['price'] ?> руб.</h4>
<a href="?p=cart&a=add&id=<?= $good['id'] ?>">Купить</a><br><br>
<a href="?p=good">Назад</a>
<hr>