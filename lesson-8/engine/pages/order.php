<?php

function indexAction()
{
    return render(
        'order',
        [
            'title' => 'Оформление заказа',
        ]
    );
}

function makeOrderAction()
{
    $userId = $_SESSION['user'];
    $items = json_encode($_SESSION['goods']);
    $sql = "INSERT INTO orders (user_id, items) VALUES ('{$userId}', '{$items}');";
    mysqli_query(getLink(), $sql);
    unset($_SESSION['goods']);
    header('Location: /?p=order&a=index');
}
