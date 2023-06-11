<?php

class Lingkaran{
    // Membuat Property
    public $jari_jari;
    public const PHI = 3.14;

    // Membuat Method
    public function __construct($r){
        $this->jari_jari = $r;
    }
    // Luas
    public function luas(){
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling(){
        return 2 * self::PHI * $this->jari_jari;
    }
}

    // Membuat Objek
    $lingkaran1 = new Lingkaran(10);
    echo "Luas lingkaran1 = " . $lingkaran1->luas();
    echo "<br>";
    echo "Keliling lingkaran1 = " . $lingkaran1->keliling();