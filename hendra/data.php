<?php
include("koneksi1.php");?>

<html>
    <head>
    </head>
    <body>
        <h1>Data Ruko</h1>
        <h4> <a href="tambah.php">Tambah Data</a></h4>
        <table border="1">

        <tr>
            <th>NIK</th>
            <th>NAMA</th>
            <th>JENIS RUKO</th>    
        </tr>


        <?php
        include("koneksi1.php");
        $sql = 'SELECT * FROM tb_kelas';
        $query = mysqli_query($db, $sql);

       while($tb_kelas = mysqli_fetch_array($query)){
        echo "<tr>";

        echo "<td>".$tb_kelas['Nik']."</td>";
        echo "<td>".$tb_kelas['Nama']."</td>";
        echo "<td>".$tb_kelas['Jenis_ruko']."</td>";
    

        echo "<td>";
        echo "<a href='edit-data2.php?id=".$tb_kelas['id']."'>Edit</a> | ";
        echo "<a href='hapus-data2.php?id=".$tb_kelas['id']."'>Hapus</a> | ";
        echo "</td>";

        echo "</tr>";
       }

        ?>
        </table>
    </body>
</html>