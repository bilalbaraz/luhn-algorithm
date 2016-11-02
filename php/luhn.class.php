<?php

class Luhn
{
	private $number;

	function __construct()
	{
		echo 'Luhn Algoritm Engine';
	}

	public function setCardNumber (int $data)
	{
		$this->number = $data;
	}

	public function getCardNumber ()
	{
		return $this->number;
	}
	
}

?>