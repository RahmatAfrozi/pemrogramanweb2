<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //Override
    public function ucapSalam()
    {
       echo "Hello My name is " . $this->nama;
    }
}