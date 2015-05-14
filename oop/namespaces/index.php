<?php
require 'Test.php'
use Daniel;

$myClass = 'Test';


var_dump(file_exists($myClass.'.php'));

require_once($myClass.'.php');
#include_once($myClass.'.php');


if ( ! class_exists($myClass)) 
        die('There is no hope!');

$test = new \Daniel\Test();

#$donor = new Donor();
