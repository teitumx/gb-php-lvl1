<?php

function indexAction()
{
    // var_dump($_SESSION['goods']);
    // var_dump(json_encode($_SESSION['goods']));
    // var_dump($_SESSION['user']);

    return render(
        'cartIndex',
        [
            'goods' => $_SESSION['goods'],
            'title' => 'Корзина товаров',
        ]
    );

    // $html = '<h1>Корзина</h1>';
    // if (empty($_SESSION['goods'])) {
    //     return $html . 'Корзина пуста';
    // }

    // foreach ($_SESSION['goods'] as $id => $good) {
    //     $totalPrice = $good['count'] * $good['price'];
    //     $html .= <<<php
    //     <p>Наименование товара: {$good['name']}</p>
    //     <p>

    //     Количество товара: <a href="?p=cart&a=minus&id={$id}">-</a> {$good['count']} <a href="?p=cart&a=add&id={$id}">+</a></p>

    //     <p>Общая стоимость: {$totalPrice}</p>
    //     <hr>
    //     php;
    // }

    // return $html;
}

function addAjaxAction()
{
    header('Content-Type: application/json');
    $id = postId();
    if (empty($id)) {
        echo json_encode([
            'success' => false
        ]);
        return;
    };

    $msg = goodAdd(postId());

    $success = false;
    if (empty($msg)) {
        $msg = 'Товар добавлен в корзину';
        $success = true;
    }
    echo json_encode([
        'success' => $success,
        'msg' => $msg,
        'count' => goodsCount()
    ]);
}

function addAction() //добавление данных в корзину
{
    $msg = goodAdd(getId());
    if (empty($msg)) {
        $msg = 'Товар добавлен в корзину';
    }
    sentMSG($msg);
    redirect();
}

function minusAction()
{
    $msg = goodMinus(getId());
    if (empty($msg)) {
        $msg = 'Товар убран из корзины';
    }
    sentMSG($msg);
    redirect();
}

function goodMinus($id)
{
    if (empty($id)) {
        return 'Ошибка';
    }

    if (!empty($_SESSION['goods'][$id])) {
        $_SESSION['goods'][$id]['count']--;
        // return '';
    }

    if ($_SESSION['goods'][$id]['count'] == 0) {
        unset($_SESSION['goods'][$id]);
        return '';
    }
}

function goodAdd($id) //алгоритм добавления в корзину
{
    if (empty($id)) {
        return 'Товар не найден';
    }

    $sql = 'SELECT id, name, price, info FROM goods WHERE id = ' . $id;
    $res = mysqli_query(getLink(), $sql);

    $row = mysqli_fetch_assoc($res);

    if (empty($row)) {
        return 'Товар не найден';
    }

    //если массив $_SESSION['goods'] находит товар с id, то увеличиваем значение
    if (!empty($_SESSION['goods'][$id])) {
        $_SESSION['goods'][$id]['count']++;
        return '';
    }

    $_SESSION['goods'][$id] = [
        'name' => $row['name'],
        'price' => $row['price'],
        'count' => 1
    ];

    return '';
}
