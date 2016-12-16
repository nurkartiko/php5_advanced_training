<?php
/* 
 * Konsep OOP
 */


// class Car
class Car{
    
    function __construct() {
        echo '<p>initialize class '.__CLASS__.'</p>';
    }

    function __destruct() {
                echo '<p>destruct class '.__CLASS__.'</p>';
    }
    
    // visibility: public, private, protected
    
    // properties
    public $brand;
    public $merk;
    public $color;
    
    // fungsi setter
    function setBrand($brandName){
        $this->brand=$brandName;
    }
    
    // fungsi getter
    function getBrand(){
        return $this->brand;
    }
}

class motorCycle extends Car{
    
    function __construct($merk) {
        $this->merk=$merk;
    }
    
    function getMerk(){
        return $this->merk;
    }
}

// instance object
$avanza = new Car();
$avanza->setBrand('Avanza');
echo 'sebuah mobil '.$avanza->getBrand();
$avanza->color='merah';
echo ' dengan warna '.$avanza->color;

$yamaha = new motorCycle('yamaha');
echo '<p> merk motor : '.$yamaha->getMerk().'</p>';