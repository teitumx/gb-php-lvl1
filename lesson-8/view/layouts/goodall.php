<h1>Товары</h1>

<?php foreach ($goods as $good) : ?>
    <h3><?= $good['name'] ?></h3>
    <p><?= $good['info'] ?></p>
    <h4><?= $good['price'] ?> руб.</h4>
    <p style="cursor: pointer;" onclick=" addToCart(<?= $good['id'] ?>)">Купить</p>
    <a href="?p=good&a=one&id=<?= $good['id'] ?>">Подробнее</a>
    <hr>
<?php endforeach; ?>