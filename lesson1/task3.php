<?php
    $a = 5;
    $b = '05';

    var_dump($a == $b);  //Почему true? - если сравнивать число со строкой содержащей число, то строка будет преобразованна в числа и сравниваются они, как числа

    var_dump((int)'012345');  //Почему 12345? - (int) приводит к числовому значению 

    var_dump((float)123.0 === (int)123.0); // Почему false? - (float) приводит к дробному числу, а (int) приводит к целому

    var_dump((int)0 === (int)'hello, world'); //Почему true? - (int) приводит к числовому значению
?>