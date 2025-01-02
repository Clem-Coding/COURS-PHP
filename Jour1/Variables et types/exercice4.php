
<!-- 4. Exercice 4 : Conversion de types
Créez une variable $data qui contient le float 42.0 et affichez-la avec echo
Créez une variable $int qui transforme $data en int et affichez-la avec echo
Créez une variable $str qui transforme $int en string et affichez-la avec echo -->



<?php


$data = 42.3;
var_dump($data);
echo "$data <br>";

$int = (int) $data;
var_dump($int);
echo "$int  <br>";

$str = (string) $int;
var_dump($str);
echo $str;






?>