<?php
include_once('header.html');

class MyClass
    {
        // свойства и методы класса
        public $prop1='свойство класса';
    }

$obj= new MyClass();

//var_dump($obj);

echo $obj->prop1;
?>