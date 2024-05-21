<?php


namespace App\classes;


class FullName
{
    public $firstName, $lastName, $fullName;

    public function __construct()
    {
        $this->firstName="Mosiur";
        $this->lastName="Rahman";
    }

    public function makeFullName(){
        $this->fullName=$this->firstName. ' '.$this->lastName;
        echo $this->fullName;
    }

}