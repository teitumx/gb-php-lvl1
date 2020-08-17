<?php

$dir = 'img/';
$photos = scandir($dir);

$path =__DIR__ .'\\'.$dir; //для формирования ссылок на изображения, подставить в foreach вместо $dir, но у меня почему-то не сработало, хотя ссылки формировались правильно 


foreach($photos as $value){

    if($value != '.' && $value != '..'){
    
    echo <<<HERE

    <p><a href="$dir$value" target="_blank"><img src="$dir$value" width="400"</a></p>

    HERE;
    }
    
};

//Задание на логи

function logs(){
    $file = 'logs.txt';
    file_put_contents($file, date('Y-m-d H:i:s') . PHP_EOL, FILE_APPEND);
    $file_arr = file($file); 
    $count_lines = count($file_arr); //считаем кол-во строк
    if($count_lines >= 10 && file_exists($file)) {
        $i = 1;
        $i++;
        $file = "logs$i.txt";
        file_put_contents($file, "строк больше 10". PHP_EOL, FILE_APPEND);
    }
};

logs();
 


?>