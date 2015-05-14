<?php

print_r( $_POST );
print_r( $_SERVER["REQUEST_METHOD"] );
#print_r( $_SERVER["HTTP_X_FORWARDED_FOR"] );


if (isset($_POST))
{
    logToFile('POST.log', $_POST);
}
elseif (isset($_GET))
{
    logToFile('POST.log', $_GET);
}



function logToFile($filename, $msg)
{
    $fd = fopen($filename, "a");
    fwrite($fd, getDateString(). $_SERVER['REQUEST_METHOD']." ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n");
    if(is_array($msg))
    {
        foreach($msg as $key => $val){
            fwrite($fd, $key.":".$val . "\n");
        }
    }
    fclose($fd);
}

function getDateString()
{
    return "[" . date("Y/m/d h:i:s", mktime()) . "] ";
}

