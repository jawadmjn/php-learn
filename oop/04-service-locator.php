<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1'); 

echo '<p style="background-color:#ccc; font-family:arial;">Service Locator</p>';

//~ require 03-dependeny-injection.php

//~ class Pizza

//~ {
	//~ public function __construct ( CrustInterface $crust )
	//~ {
		//~ $this-> crust = $crust;
	//~ }
	
	//~ public function addTopping ( ToppingInterface $topping ) 
	//~ {
		//~ $this-> toppings [] = $topping;
	//~ }
//~ }



class ServiceLocator
{
	protected $services = array();
	
	public function set ( $id, $className )
	{
		$this->services[$id] = new $className();
	}
	
	public function get ( $id )
	{
		return $this->services[$id];
	}
}


$s1 = new ServiceLocator();
$s1->set( 'wheat-crust', 'CrustWheatFlour' );
$s1->set( 'salami', 'ToppingSalami' );
$s1->set( 'cheese', 'ToppingCheese' );

//~ $pizzaSalami new Pizza ($s1->get('wheat-crust'));