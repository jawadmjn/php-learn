<?php

var_dump(isset($_GET));

if ( !$_GET ) {
    echo 'get is not set';
    header("Location: get.php?var1=value&var2=value");
} else {

}


//$_GET['foo'] = 'bar';


var_dump( $_GET );

