<?php

class Calculator
{
    public function add($a, $b)
    {
        // vérifie si les valeurs ne sont pas des nombres
        if (!is_numeric($a) || !is_numeric($b)) {


            //Si la condition précédente est vraie alors cette ligne lance une exception de type InvalidArgumentException
            //qui peut être récupérée dans le test grace aux assertions spéciales pour tester les exceptions dans PHPUnit.
            throw new InvalidArgumentException("Both arguments must be numbers.");
        }
        return $a + $b;
    }
}
