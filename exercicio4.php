<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['op'];


switch($op){
    case  "a":
    echo "Resultado da soma:".($n1 + $n2);
    break;
    
    case  "s":
    echo "Resultado da subtração:".($n1 - $n2);
    break;

    case  "m":
    echo "Resultado da multiplicação:".($n1 * $n2);
    break;

    case  "d":
    echo "Resultado da divisão:".($n1 / $n2);
    break;
}
?>