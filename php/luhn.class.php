<?php

class Luhn
{
	private $number;

	function __construct()
	{

	}

	public function setCardNumber (int $data)
	{
		$this->number = $data;
	}

	public function getCardNumber ()
	{
		return $this->number;
	}

	public function validator()
	{
		return false;
	}
	
}

?>