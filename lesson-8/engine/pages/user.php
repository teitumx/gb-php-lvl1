<?php

function indexAction()
{
    return allAction();
}

function allAction()
{
    return var_dump($_SESSION);
    print_r($_SESSION['user']);
}

function oneAction()
{
    return '<h1>Пользователь</h1>';
}
