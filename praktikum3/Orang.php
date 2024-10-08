<?php

class Orang{
    protected $nama;

    //constructor
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //method
    public function ucapSalam(){
        echo "Halo nama saya " . $this->nama;
    }
}