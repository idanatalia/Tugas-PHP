<?php
$dbname = 'dbtoko1';
$dsn = 'mysql:dbname='.$dbname.';host:localhost';
$user ='root'; $password ='';
try {
     $dbh = new PDO($dsn, $user, $password);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Koneksi Sukses";   
//echo "Sukses koneksi ke database $dbname dengan user $user";
} catch (PDOException $e) {
   echo 'Database Tidak Terkoneksi'.$e->getMessage();
    }
    
?>