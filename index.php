<?php
include_once('header.html');

class MyClass
    {
        // свойства и методы класса
        public $prop1='свойство класса';

        public function __construct()
        {
            echo 'создан объект класса '.__CLASS__.'! <br />';
        }

        public function __destruct()
        {
            echo 'уничтожен объект класса '.__CLASS__.'! <br />';
        }

    public function setProperty($newval1)
        {
            $this->prop1=$newval1;
        }

        public function getProperty()
        {
            return $this->prop1.'<br>';
        }
    }

class MyAnotherClass extends MyClass
{
    public function NewMethod()
    {
        return 'Новый метод класса: '.__CLASS__.'<br />';
    }
}

$obj_one= new MyClass();
$obj_two= new MyClass();
$obj_three= new MyAnotherClass();

echo $obj_one->getProperty();
echo $obj_two->getProperty();
//echo $obj_three->NewMethod();

echo '<br /><br />';

$obj_one->setProperty('Это свойство первого класса.');
$obj_two->setProperty('Это свойство второго класса.');

echo $obj_one->getProperty();
echo $obj_two->getProperty();

unset($obj_one);


echo 'Конец файла <br />';
?>