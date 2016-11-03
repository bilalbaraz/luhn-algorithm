<?php

class Luhn
{
	private $number;

	function __construct()
	{

	}

	public function setCardNumber (string $data)
	{
		$this->number = $this->toInteger($data);
	}

	public function getCardNumber () : int
	{
		return $this->number;
	}

	public function validator()
	{
		return false;
	}

	public static function toInteger(string $string) : int
	{
		return preg_replace("/[^\d]/", "", $string);
	}
	
}

?>