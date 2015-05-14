<?php
error_reporting(E_ALL);

ini_set( 'display_errors','1'); 
echo 'late static binding <br>';


class PizzaSalami {
	
	public static function getNameSelf () {
		return self::name();
	}
	
	public static function getNameStatic() {
		return static::name();
	}
	
	public static function name() {
		return 'Pizza mit Salami<br>';
	}
}

class PizzaSalamiPeperoni  extends PizzaSalami{
	public static function name () {
		return 'Pizza mit Salami und Peperoin<br>';
	}
}


echo PizzaSalami::getNameStatic();
echo PizzaSalami::getNameSelf();

echo PizzaSalamiPeperoni::getNameStatic();
echo PizzaSalamiPeperoni::getNameSelf();
