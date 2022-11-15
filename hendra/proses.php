<?php
include("koneksi1.php");
if(isset($_POST['submit'])){
    $Nik = $_POST['Nik'];
    $Nama = $_POST['Nama'];
    $Jenis_ruko = $_POST['Jenis_ruko'];

    $sql = "INSERT INTO tb_kelas (Nik, Nama, Jenis_ruko) VALUES ('$Nik', '$Nama', '$Jenis_ruko)";
    $query = mysqli_query($db, $sql);
}