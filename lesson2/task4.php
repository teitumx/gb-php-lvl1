<?php
//Функции из задания #3

function sum($a, $b) 
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function multi($a, $b) 
{
    return $a * $b;
}

function div($a, $b) 
{
    return $a / $b;
}


//Задание #4
function mathOperation($arg1, $arg2, $operation)
{
    switch($operation){
        case 1: //сложение
            return sum($arg1, $arg2);
        break;
        case 2: //вычитание
            return sub($arg1, $arg2);
        break;
        case 3: //умножение
            return multi($arg1, $arg2);
        break;
        case 4: //деление
            return div($arg1, $arg2);
        break;
    };
}

echo mathOperation(2, 5, 1); 

?>