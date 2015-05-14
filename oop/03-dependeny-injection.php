<?php

error_reporting(E_ALL);
ini_set( 'display_errors','1'); 

echo 'dependency injections<br><br>';

//~ class CrustWheatFlour {};
//~ class ToppingSalami {};
//~ class ToppingCheese {};
//~ class ToppingTomatoeStodge {};


//~ class PizzaSalami {
	//~ public function __construct () 
	//~ {
		//~ $this-> crust = new CrustWheatFlour();
		//~ $this-> toppings = array (
			//~ new ToppingSalami(),
			//~ new ToppingCheese(),
			//~ new ToppingTomatoeStodge()
		//~ );
	//~ }
//~ }

//~ $pizzaSalami = new PizzaSalami ();

//~ var_dump ( $pizzaSalami );

interface CrustInterface {};
interface ToppingInterface {}

class CrustWheatFlour implements CrustInterface{} ;
class ToppingSalami implements ToppingInterface{} ;

class Pizza

{
	public function __construct ( CrustInterface $crust )
	{
		$this-> crust = $crust;
	}
	
	public function addTopping ( ToppingInterface $topping ) 
	{
		$this-> toppings [] = $topping;
	}
}


$pizzaSalami = new Pizza ( new CrustWheatFlour () );
$pizzaSalami -> addTopping ( new ToppingSalami () );


echo 0;



















