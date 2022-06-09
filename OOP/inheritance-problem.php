<?php
// Your code here!

class kendaraan {
    public $maksimalkm,
           $merk,
           $harga,
           $tipemtr,
           $tipembl,
           $tipe;
    
    public function __construct ($maksimalkm, $merk, $harga, $tipemtr, $tipembl, $tipe) {
        $this->maksimalkm = $maksimalkm;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->tipemtr = $tipemtr;
        $this->tipembl = $tipembl;
        $this->tipe = $tipe;
    }
           
    public function daftar() {
        return "$this->merk, $this->harga";
    }
    
    public function infolengkap () {
        $info = "$this->tipe: {$this->merk}, (Oli harus diganti setiap: {$this->maksimalkm})";
        if ($this->tipe == "mobil") {
            $info .= "Kendaraan ini bertipe: {$this->tipembl}";
            
        } else if ($this->tipe == "motor") {
            $info .= "Kendaraan ini bertipe: {$this->tipemtr}";
        }
        return $info;
    }
    
}


//object

$produkmobil = new kendaraan (50000, "Toyota", "100 juta", 0, "Sedan", "mobil");
$produkmotor = new kendaraan (4000, "Honda", "15 Juta", "Bebek", 0, "motor");

echo $produkmobil->infolengkap();
echo $produkmotor->infolengkap();
