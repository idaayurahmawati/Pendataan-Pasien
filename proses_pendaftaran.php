<?php
include("koneksi.php");

if(isset($__POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_nelpn =$_POST['no_nelpn'];
    $agama = $_POST['agama'];
    $tanggal_masuk = $_POST['tangal_masuk'];
    $gejala = $_POST['gejala'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_kamar = $_POST['no_kamar'];


    $sql = "INSERT INTO db_pasien (nama, alamat, jenis_kelamin, no_nelpn, agama, tangal_masuk, gejala, tempat_lahir, tanggal_lahir, notelpn") VALUES ('$nama','$alamat','$jenis_kelamin','$no_nolpn','$agama','$tanggal_masuk','$gejala','$tempat_lahir','$tanggal_lahir','$no_kamar')
    $query = mysqli_query($koneksi, $sql);

    if( $query) {
        header('location:index.php?status=sukses');
    }
    else{
        header('location:index.php?status=gagal');
    }
}
?>