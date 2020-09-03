<h1>Товары</h1>

<?php foreach ($orders as $value => $key) : ?>
    <h3>Номер заказа: <?= $key['id'] ?></h3>
    <?php foreach ($key['items'] as $val => $k) : ?>
        <p>Артикул товара: <?= $val ?></p>
        <p>Наименвание товара: <?= $k['name'] ?></p>
        <p>Количество: <?= $k['count'] ?></p>
        <h4>Цена: <?= $k['price'] ?> руб.</h4>
        <br>
    <?php endforeach; ?>
    <p>Статус заказа: <?= $key['status'] ?></p>
    <hr>
<?php endforeach; ?>