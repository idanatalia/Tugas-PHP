<?php

class Pesanan {
    private $koneksi;
    public function __construct(){
        global $dbh; // instance object koneksi.php
        $this->koneksi = $dbh;
    }

public function pesanan(){
    $sql = "SELECT * FROM pesanan ";
$ps = $this->koneksi->prepare($sql);
$ps->execute();
$rs = $ps->fetchAll();
return $rs;

}

public function getProduk($id){
    $sql ="SELECT * FROM pesanan ";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    $rs = $ps->fetchAll();
    return $rs;    
}

public function simpan($data){
    $sql = "INSERT INTO produk(kd_produk, qty, harga, id_pelanggan)
    VALUES (?,?,?,?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
    
}
}

?>