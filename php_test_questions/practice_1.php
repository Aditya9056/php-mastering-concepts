<?php

// Visibility and Inheritance

class Person
{
    protected $firstName = "Ram";

    function hi($name)
    {
        return 'hi' . ' ' . $name . ' from ' . $this->firstName;
    }
}

class Pet extends Person
{
    public function owner()
    {
        $a = $this->firstName;
        return $a;
    }
}

$ob = new Person();
echo $ob->hi('Jhon');
echo $ob->hi('Jhon');

$pet = new Pet();
echo $pet->owner();
