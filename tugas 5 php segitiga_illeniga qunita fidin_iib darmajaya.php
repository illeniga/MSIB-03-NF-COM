<?php 
require_once 'Bentuk2D.php';

class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;
    public $siring;

    public function __construct($alas,$tinggi,$siring) 
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $siring;
    }

    public function namaBidang() {
        echo "Segitiga";
    }
    public function luasBidang() {
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function  kelilingBidang() {
        $keliling = $this->sisi + $this->sisi + $this->sisi;
        return $keliling;
    }

    public function keterangan() {
        echo ' Alas = '.$this->alas.' Cm <br/>  Tinggi = '.$this->tinggi.' Cm <br/>  Sisi Miring ='.$this->sisi.' Cm';
    }

}