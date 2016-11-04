<?php
require_once '../Luhn.class.php';

use PHPUnit\Framework\TestCase;

class LuhnAlgorithmTest extends TestCase
{

    protected $arrage;

    function __construct()
    {
        $this->arrange = new Luhn();
    }

    public function test_isCardNumberEmpty()
    {
        $this->assertEquals(0, $this->arrange->getCardNumber());
    }

    public function test_isCardNumberInteger()
    {
        $this->arrange->setCardNumber('bilal465727');
        $this->assertInternalType('int', $this->arrange->getCardNumber());
    }

}