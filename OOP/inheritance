<?php
// Your code here!

class kendaraan {
    public $maksimalkm,
           $merk,
           $harga,
           $tipemtr,
           $tipembl;
    
    public function __construct ($maksimalkm, $merk, $harga, $tipemtr, $tipembl) {
        $this->maksimalkm = $maksimalkm;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->tipemtr = $tipemtr;
        $this->tipembl = $tipembl;
    }
           
    public function daftar() {
        return "$this->merk, $this->harga";
    }
    
    public function infolengkap () {
        $info = "$this->tipe: {$this->merk}, (Oli harus diganti setiap: {$this->maksimalkm})";
        return $info;
    }
    
}

class mobil extends kendaraan {
    public function cetakinfolengkap() {
      $info = "Mobil: {$this->merk}, (Oli harus diganti setiap: {$this->maksimalkm}). Kendaraan ini bertipe: {$this->tipembl}.";   
      return $info;
    }
}

class motor extends kendaraan {
    public function cetakinfolengkap() {
    $info =  $info = "Motor: {$this->merk}, (Oli harus diganti setiap: {$this->maksimalkm}). Kendaraan ini bertipe: {$this->tipemtr}.";
    return $info;
    }

}

//object

$produkmobil = new mobil (50000, "Toyota", "100 juta", 0, "Sedan");
$produkmotor = new motor (4000, "Honda", "15 Juta", "Bebek", 0);

echo $produkmobil->cetakinfolengkap();
echo $produkmotor->cetakinfolengkap();
