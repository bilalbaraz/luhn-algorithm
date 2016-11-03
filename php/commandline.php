<?php
require_once 'Luhn.class.php';

$luhn = new Luhn();
$luhn->setCardNumber($argv[1]);
echo $luhn->getCardNumber();
?>