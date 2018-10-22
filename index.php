<?php
include_once('header.html');

class MyClass
    {
        // свойства и методы класса
        public $prop1='свойство класса';

        public function setProperty($newval1)
            {
                $this->prop1=$newval1;
            }
        public function getProperty()
            {
                return $this->prop1.'<br>';
            }
    }

$obj_one= new MyClass();
$obj_two= new MyClass();

$obj_one->setProperty('Это свойство первого класса.');
$obj_two->setProperty('Это свойство второго класса.');

echo $obj_one->getProperty();
echo $obj_two->getProperty();


?>