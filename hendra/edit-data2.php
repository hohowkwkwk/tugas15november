<?php

include("koneksi1.php");

if( !isset($_GET['id'])){
    header('Location: data.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM tb_kelas WHERE id=$id";
$query = mysqli_query($db, $sql);
$tb_kelas = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query)  < 1 ){
    die("data tidak ditemukan...");
}

?>
<html>
    <head>
    </head>
    <body>
        <h1>From Edit Data</h1>
        <form action="proses-edit-data.php" method="POST">

        <form>
            <fieldset>
                <p>
                   <label for="Nik">NIK : </label>
                   <input type="text" name="Nik" value="<?php echo $tb_kelas ['Nik'] ?>" />
                </p>
                <p>
                   <label for="Nama">NAMA : </label>
                   <input type="text" name="Nama" value="<?php echo $tb_kelas ['Nama'] ?>" />
                </p>
                <p>
                    <label for="Jenis_ruko">JENIS RUKO : </label>
                    <select name="Jenis_ruko"> value="<?php echo $tb_motor ['Jenis_ruko']?>"> 
                    <option value="Kelas A">Kelas A</option>
                    <option value="Kelas B">Kelas B</option>
                    <option value="Kelas C">Kelas C</option>
                    <option value="VIP">VIP</option>
                    </select>
                </p>
                <p>
                   <input type="submit" value="Simpan" name="simpan" />
               </P>
           </fieldset>
       </form>
   </body>
</html> 
