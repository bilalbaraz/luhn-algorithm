<?php

require_once 'luhn.class.php';

$luhn = new Luhn();

$luhn->validate('465727');

?>