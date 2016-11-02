<?php

require_once 'luhn.class.php';

$luhn = new Luhn();
$luhn->setCardNumber('465727');
var_dump($luhn->getCardNumber());

?>