<?php
include_once 'koneksi.php';
include_once 'models/Pesanan.php';

// stap pertama yaitu menangkap request form
$kd_produk = $_POST['kd_produk'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];
$id_pelanggan = $_POST['id_pelanggan'];

// menangkapan form diatas dijadikan array
$data = [
    $kd_produk,
    $qty,
    $harga,
    $id_pelanggan
 
];
$model = new Pesanan();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    default:
    header ('Location:index.php?url=pesanan');
    break;
}
header('Location:index.php?url=pesanan');

?>