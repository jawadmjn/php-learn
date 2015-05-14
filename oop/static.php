<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1'); 

class myStatic {

	static function name () {
		return 'static: I am class...y...;)';
	}
	
	function nname () {
		return 'nomral: I am class...y...;)';
	}
}

//~ accesible without needing an instantiation of the class
echo myStatic::name();


$MyStatic = new myStatic ();

echo $MyStatic->name();

// static var

//$count = 5;
//function get_count()
//{
//    static $count = 0;
//    return $count++;
//}
//echo $count;
//++$count;
//echo get_count();
//echo get_count();