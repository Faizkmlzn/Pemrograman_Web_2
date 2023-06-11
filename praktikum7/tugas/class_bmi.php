<?php

class BmiPasien {
    public $berat;
    public $tinggi;

    public function __construct($b, $t){
        $this->berat = $b;
        $this->tinggi = $t;
    }

    public function hasilBMI(){
        return ($this->berat / ($this->tinggi * $this->tinggi))*10000;
    }
    /*public function hasilBMI(){
        $this->berat;
        return ($this->tinggi * $this->tinggi)/ $this->berat;
    }*/



    public function statusBMI() {
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5) {
            return "Kurus";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Gemuk";
        } else {
            return "Obesitas";
        }
    }

}







