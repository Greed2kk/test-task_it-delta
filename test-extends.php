<?php
class Animal
{

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function voice($do)
    {
        echo "$this->name can $do \r\n";
    }

    public function walk()
    {
        echo "$this->name can walk\r\n";
    }
}

class Dog extends Animal
{

    public function play()
    {
        echo "$this->name can play\r\n";
    }

}

class Cat extends Animal
{
    public function lay()
    {
        echo "$this->name can lay\r\n";
    }

}

$dog = new Dog('bobik');
$dog->voice('bark');
$dog->play();

$cat = new Cat('Vasya');
$cat->voice('meow');
$cat->lay();

