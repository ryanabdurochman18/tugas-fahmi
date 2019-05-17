<?php
ob_start();
include "koneksi.php";

$id_artikel = $_POST['id_artikel'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$isi = $_POST['isi'];
$nama_gambar = $_POST['gambar'];

if(isset($_POST['update_artikel'])){
    $dir_upload = "../img/gambar/";
    $nama_gambar = $_FILES['gambar']['name'];

    if(is_uploaded_file($_FILES['gambar']['tmp_name'])){
        $cek = move_uploaded_file ($_FILES['gambar']['tmp_name'],$dir_upload.$nama_gambar);
    }
}


$query=mysqli_query($k,"UPDATE artikel SET judul='$judul', penulis='$penulis',isi='$isi',gambar='$nama_gambar',tanggal=now() WHERE id_artikel='$id_artikel'") or die(mysqli_error());
header('location:tampilartikel.php');
?>
