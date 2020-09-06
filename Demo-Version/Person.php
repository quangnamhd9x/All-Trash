<?php


class Person
{
    protected $name;
    protected $age;
    protected $address;

    public function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function showInfo(){
        echo 'Ban ten la ' . $this->name . ' so tuoi ' . $this->age . ' dia chi ' . $this->address;
    }
}