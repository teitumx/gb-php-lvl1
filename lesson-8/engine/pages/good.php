<?php
function indexAction()
{
    return allAction();
}


function allAction()
{
    $sql = 'SELECT id, name, price, info FROM goods';
    $res = mysqli_query(getLink(), $sql);

    $goods = mysqli_fetch_all($res, MYSQLI_ASSOC);

    return render(
        'goodall',
        [
            'goods' => $goods,
            'title' => 'Все товары'

        ]
    );
}

function oneAction()
{
    $sql = 'SELECT id, name, price, info FROM goods WHERE id = ' . getId();
    $res = mysqli_query(getLink(), $sql);
    $good = mysqli_fetch_assoc($res);

    return render(
        'goodone',
        [
            'good' => $good,
            'title' => $good['name'],
        ]
    );
}
