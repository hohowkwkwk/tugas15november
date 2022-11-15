<!DOCTYPE html>
<html lang="en">
    <head>
        <title>APLIKASI PENDATAAN RUKO PASAR SAYUNG</title>
    </head>
    <header>
        <h3>Kerusakan Sepeda Motor</h3>
    </header>
    <body>
        <form action="proses.php" method="POST">
            <fieldset>
                <p>
                    <label for name>NIK : </label>
                    <input type="text" name="Nik">
                </p>
                <p>
                    <label for name>NAMA : </label>
                    <input type="text" name="Nama">
                </p>
                <P>
                    <label for name>JENIS RUKO : </label>
                    <select name="Jenis_ruko">
                    <option>Kelas A</option>
                    <option>Kelas B</option>
                    <option>Kelas C</option>
                    <option>VIP</option>
                    </select>
                </P>
            </fieldset>
            <input type="submit" name="submit" value="submit">
    </body>
</html>