<?php
// Buatlah class balok yang memiliki:
// 1. Property Panjang, Lebar, dan Tinggi
// 2. Method __construct, getLuas, getKeliling, dan getVolume

class Balok{
    // Membuat Property
    public $panjang;
    public $lebar;
    public $tinggi;

    // Membuat Method
    public function __construct($p, $l, $t){
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function luas(){
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
    public function keliling(){
        return 4 * ($this->panjang + $this->lebar + $this->tinggi);
    }
    public function volume(){
        return $this->panjang * $this->lebar * $this->tinggi;
    }

}

// Membuat Objek
$balok1 = new Balok(4, 2, 2);
echo "Luas balok1 = " . $balok1->luas();
echo "<br>";
echo "Keliling balok1 = " . $balok1->keliling();
echo "<br>";
echo "Volume balok1 = " . $balok1->volume();