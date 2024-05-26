<?php


namespace App\classes;


class Car
{
    public $price;
    protected $seat;
    private $aiFeature;


    public function price()
    {
        $this->price=10;
    }

    protected function seat()
    {
        $this->seat = 2;
    }

    private function aiFeature(){
        $this->aiFeature="this car have ai feature enable";
    }

}