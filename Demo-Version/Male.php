<?php


class Male extends Person
{
    protected $gender;

    public function __construct($name, $age, $address, $gender)
    {
        parent::__construct($name, $age, $address);
        $this->gender = $gender;
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.

    }

    public function makeUp()
    {
        echo ' lam dep cho Vo ';
    }

    public function showInfo()
    {
        echo 'Ban ten la ' . $this->name . ' gioi tinh la ' . $this->gender . ' so tuoi ' . $this->age . ' dia chi ' . $this->address;
    }

}