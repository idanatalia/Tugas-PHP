<?php
class Pelanggan {
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;

    }
    public function Pelanggan(){
        $sql = "SELECT * FROM pelanggan";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $ps;
        
    }

    public function getPelanggan($id){
        $sql = "SELECT * FROM pelanggan";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetchAll();
        return $rs;    
    }
    
    public function simpan($data){
        $sql = "INSERT INTO pelanggan(nama_pelanggan, kode, jk, tmp_lahir, tgl_lahir, email, kartu_id, alamat, umur)
        VALUES (?,?,?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        
    }
    
}
?>
