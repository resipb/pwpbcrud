<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA GURU</title>
</head>

<body>
    <header>
        <h3>GURU YANG SUDAH TERDAFTAR</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Kode_guru</th>
            <th>Guru_mapel</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_guru";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['kode_guru']."</td>";
            echo "<td>".$siswa['guru_mapel']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>