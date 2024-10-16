<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pegawai";
//aktifin mode exception untuk mysqli
mysqli_report(flags : MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    //buat koneksi ke db
    $koneksi = mysqli_connect($servername, $username, $password, $dbname);
    //jika berhasil
    echo "Koneski berhasil";
} catch (mysqli_sql_exception $e) {
    //kalau terjadi kesalahan koneksi
    echo "Koneksi Gagal: " .$e->getMessage();
}
?>