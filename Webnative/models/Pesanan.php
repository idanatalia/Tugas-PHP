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
}

?>