<?php
// Your code here!

class kendaraan {
    public $maksimalkm,
           $merk,
           $harga;
    
    public function __construct ($maksimalkm, $merk, $harga) {
        $this->maksimalkm = $maksimalkm;
        $this->merk = $merk;
        $this->harga = $harga;
    }
           
    public function daftar() {
        return "$this->merk, $this->harga";
    }
    
    
}

class mobil extends kendaraan {
    public $tipembl;
    
    public function __construct($maksimalkm, $merk, $harga, $tipembl) {
        parent::__construct($maksimalkm, $merk, $harga); 
        $this->tipembl = $tipembl;
    }

    
    public function cetakinfolengkap() {
      $info = "Mobil: {$this->daftar()}, (Oli harus diganti setiap: {$this->maksimalkm}). Kendaraan ini bertipe: {$this->tipembl}.";   
      return $info;
    }
}

class motor extends kendaraan {
    public $tipemtr;
    
    public function __construct($maksimalkm, $merk, $harga, $tipemtr) {
        parent::__construct($maksimalkm, $merk, $harga);
        $this->tipemtr = $tipemtr;
     
    }
     

    public function cetakinfolengkap() {
    $info =  $info = "Motor: {$this->daftar()}, (Oli harus diganti setiap: {$this->maksimalkm}). Kendaraan ini bertipe: {$this->tipemtr}.";
    return $info;
    }

}

//object

$produkmobil = new mobil (50000, "Toyota", "100 juta","Sedan");
$produkmotor = new motor (4000, "Honda", "15 Juta", "Bebek");

echo $produkmobil->cetakinfolengkap();
echo $produkmotor->cetakinfolengkap();
