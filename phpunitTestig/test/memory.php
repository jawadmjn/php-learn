<?php

ini_set('memory_limit',100);
echo ini_get('memory_limit')."\n";

function memory($a=false)
{
	echo memory_get_usage($a)." Bytes \n";
}

memory(0);

$a = str_repeat("Hello", 4242);

memory(0);


unset($a);

memory(0);





