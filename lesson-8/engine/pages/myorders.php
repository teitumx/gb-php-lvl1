<?php


function indexAction()
{
    $sql = 'SELECT * FROM orders';
    $res = mysqli_query(getLink(), $sql);

    $orders = mysqli_fetch_all($res, MYSQLI_ASSOC);

    foreach ($orders as $val => $key) {
        $orders[$val]['items'] = json_decode($key['items'], true);
    }

    return render(
        'orders',
        [
            'orders' => $orders,
            'title' => 'Мои заказы',
        ]
    );
}
