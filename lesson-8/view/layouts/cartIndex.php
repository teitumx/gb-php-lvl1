<?php

/**
 * @var array $goods
 */
?>

<h1>Корзина</h1>

<?php if (empty($goods)) : ?>
    <h3>Корзина пуста.</h3>
<?php else : ?>


    <?php foreach ($goods as $id => $good) : ?>
        <?php $totalPrice = $good['count'] * $good['price'] ?>
        <p>Наименование товара: <?= $good['name'] ?></p>
        <p>

            Количество товара: <a href="?p=cart&a=minus&id=<?= $id ?>">-</a> <?= $good['count'] ?> <a href="?p=cart&a=add&id=<?= $id ?>">+</a></p>

        <p>Общая стоимость: <?= $totalPrice ?> руб.</p>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>

<a href="?p=order&a=makeOrder">Оформить заказ</a>