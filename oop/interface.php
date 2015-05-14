<?php

error_reporting(E_ALL);
ini_set( 'display_errors','1'); 

echo 'interfaces';

interface animal {
	function breath();
	function eat();
}


class dog implements animal {
	
	function bark() {
		echo 'yap yap yap';
	}
	function breath(){
		echo 'dog is breathing';
	}
	function eat() {
		echo 'dog is eating';
	}

}


var_dump( new dog () );