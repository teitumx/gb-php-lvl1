<?php

function indexAction()
{
    return render(
        'home',
        [
            'title' => 'Главная страница'
        ]
    );
}
