<?php

include("koneksi.php");


if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $moto = $_POST['moto'];
    $asal = $_POST['asal'];
    $kelamin = $_POST['kelamin'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];

    $sql = "INSERT INTO baru (nim, nama, kelamin, prodi, fakultas, asal, moto) VALUE ('$nim', '$nama', '$kelamin', '$prodi', '$fakultas', '$asal', '$moto')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: liatdata.php');
    } else {
        header('Location: login.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>