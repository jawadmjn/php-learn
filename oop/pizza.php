<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1'); 
echo 'Closures<br>';

class PizzaSalami {};
class PizzaHawaii {}
class PizzaMelon {}


$pizzaList = array (
	new PizzaMelon(),
	new PizzaHawaii(),
	new PizzaSalami(),
	new PizzaMelon(),
	new PizzaSalami(),
);

var_dump( $pizzaList );

echo '<br>';
echo '------';
echo '<br>';

//~ $myFilter = function ( $val ) {
	//~ return ( $val instanceof PizzaSalami );
//~ }

$pizzarSalamiOnly = array_filter( $pizzaList, function ($val) {
	return ( $val instanceof PizzaSalami );
} );


var_dump ( $pizzarSalamiOnly ) ;