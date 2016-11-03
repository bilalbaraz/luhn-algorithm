<?php
require_once '../Luhn.class.php';

use PHPUnit\Framework\TestCase;

class LuhnAlgorithmTest extends TestCase
{

    protected $arrage;

    function __construct()
    {
        $this->arrange = new Luhn();
        $this->arrange->setCardNumber('bilal465727');
    }

    public function test_isCardNumberInteger()
    {
        $this->assertInternalType('int', $this->arrange->getCardNumber());
    }

}