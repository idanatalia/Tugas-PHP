<?php
include_once 'koneksi.php';
include_once 'models/Pelanggan.php';

// stap pertama yaitu menangkap request form
$nama_pelanggan = $_POST['nama_pelanggan'];
$kode = $_POST['kode'];
$jk = $_POST['jk'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir= $_POST['tgl_lahir'];
$email = $_POST['email'];
$kartu_id = $_POST['kartu_id'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];

// menangkapan form diatas dijadikan array
$data = [
    $nama_pelanggan,
    $kode,
    $jk,
    $tmp_lahir,
    $tgl_lahir,
    $email,
    $kartu_id,
    $alamat,
    $umur
 
];
$model = new Pelanggan();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah':
        $data[] = $_POST['idx']; $model->ubah($data);break;
    default:
    header ('Location:index.php?url=pelanggan');
    break;
}
header('Location:index.php?url=pelanggan');

?>