<?php
require_once 'Calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();

        $result = $calculator->add(2, 3);

        $this->assertEquals(5, $result);
    }

    public function testAddInvalidArguments()
    {
        $calculator = new Calculator();

        // Teste que l'exception est lancée lorsque les arguments ne sont pas numériques
        $this->expectException(InvalidArgumentException::class);

        //teste le message d'erreur identique à ce qui a été défini à la base
        $this->expectExceptionMessage("Both arguments must be numbers.");

        // Appelle la méthode add avec des arguments invalides
        $calculator->add("abc", 3); // Cette ligne devrait lancer une exception car string à la place d'un nombre
    }
}
