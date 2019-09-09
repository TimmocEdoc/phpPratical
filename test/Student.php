<?php


class Student
{
    public $id;
    public $name;
    public $age;
    public $address;
    public $telephone;

    public function __construct($id, $name, $age, $address, $telephone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->telephone = $telephone;
    }
}