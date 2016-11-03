<?php

require_once 'Luhn.class.php';

$luhn = new Luhn();
$luhn->setCardNumber('465727');
echo $luhn->getCardNumber();

?>