<?php

class Singleton {

    private static $instance = null;

    private function __construct(){
        //do something
    }

    public static function getInstance(){
        self::$instance !== null ?: self::$instance = new self();
        return self::$instance;
    }

}



class SingletonChild extends Singleton {}




$obj1 = SingletonChild::getInstance();
var_dump($obj1 === Singleton::getInstance());

$childobj1 = SingletonChild::getInstance();
var_dump($childobj1 === Singleton::getInstance());
var_dump($childobj1 === SingletonChild::getInstance());
