<?php

class Luhn
{
	private $number = 0;

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

	public function validator() : boolean
	{
		return false;
	}

	protected function toInteger(string $string) : int
	{
		return preg_replace("/[^\d]/", "", $string);
	}
	
}

?>