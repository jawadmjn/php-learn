<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1'); 



echo 'hello'.'<br>';


class PizzaSalami {
	var $name = 'salami-pizza';
	function Iam(){
		return 'I am a: ' . $this->name;
	}
}
class PizzaHawaii {}
class PizzaMelon {}


//$pizzaList = array( new PizzaSalami() );
//var_dump(pizzalist); 

//$salami = new PizzaSalami();
//echo $salami->Iam();


$test = 1;

$arrayList = array(new PizzaSalami(), $test, 'lol');

var_dump( $arrayList );

phpinfo();