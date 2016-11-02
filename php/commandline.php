<?php
require_once 'luhn.class.php';

$luhn = new Luhn();
$luhn->setCardNumber($argv[1]);
echo $luhn->getCardNumber();
?>