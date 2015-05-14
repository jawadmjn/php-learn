<?php

//~ ini_set('xdebug.var_display_max_data', <your preferred value>);
ini_set('xdebug.var_display_max_children', 30);	// default 128
ini_set('xdebug.var_display_max_depth', 4); 		// default: 3
ini_set('set xdebug.dump_undefined','On');
ini_set ('xdebug.dump.SERVER', 'HTTP_HOST, SERVER_NAME');

//~ xdebug.dump.GET=*;
//~ xdebug.dump.GET=*
//~ xdebug.show_local_vars=1;


var_dump ( $_SERVER ) ;

echo '<hr>';
$test  = array('a');

for ($i=0; $i<10; $i++){
	$test[] = $i;
	echo $i;
}

class XDebugTest {
	var $name = "XDebug";
	
	public function getName () {
		return $this->name;
	}
}

$xDebugTest = new XDebugTest ();


$test[] = $xDebugTest;
$test[] = 100;
$test[] = "100";
$test[] = "woah";
$test[] = array ('horse','cow','cat',array(1,2,3,array(1,2,3,array(4,5,6))),'fisch');

$i = 0;
while ( $i < 130 ) {
	$test[] = $i*10+1.2;
	$i ++;
}

var_dump ( $test );
echo '<hr>';
var_dump ( $xDebugTest );


echo 'i:'.$i;