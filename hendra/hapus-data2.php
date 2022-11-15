<?php

include("koneksi1.php");

if( isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE FROM tb_kelas WHERE id=$id";
    $query = mysqli_query($db, $sql);

      
    if( $query ){
        header('Location: data.php?status=sukses');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
?>