<?php
include("koneksi1.php");

if(isset($_POST['simpan'])){;
$kode = $_POST['id'];
$Nik = $_POST['Nik'];
$Nama = $_POST['Nama'];
$Jenis_ruko = $_POST['Jenis_ruko'];

$sql = "UPDATE tb_kelas SET Nik='$Nik', Nama='$Nama' Jenis_ruko='$Jenis_ruko' WHERE id=$kode";
$query= mysqli_query($db, $sql);

if($query){
    header('Location: data.php');
}else{
    die ("gagal mengedit");
}}
else{
    die("akses dilarang");
}
?>