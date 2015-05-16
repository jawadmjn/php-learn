<?php

/*
 * Originally from http://prosperotemuyiwa.com/2015/04/14/re-interating-the-use-of-traits/
 */


trait YesBoss {

    public function sayIt()
    {
        echo 'say it'.PHP_EOL;
    }

    public function hitIt()
    {
        echo 'hit it';
    }
}


class Boss{
    public function doIt()
    {
        echo 'do it';
    }
}


class Manager extends Boss{

    use YesBoss;

    public function hitIt()
    {
        echo 'don\'t hit it';
    }
}


$worker = new Manager();
$worker->sayIt();
$worker->doIt();
$worker->hitIt();


