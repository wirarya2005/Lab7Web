<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form method="post">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" placeholder="Your Name"><br><br>
        
        <label for="tanggal_lahir">Tanggal Lahir: </label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir"><br><br>
        
        <label for="pekerjaan">Pekerjaan: </label>
        <select name="pekerjaan" id="pekerjaan">
            <option value="Software Engineer">Software Engineer</option>
            <option value="Grafik Desainer">Grafik Desainer</option>
            <option value="Sales">Sales</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        $lahir = new DateTime($tanggal_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($lahir)->y;

        if ($pekerjaan == "Software Engineer") {
            $gaji = "Rp 10.500.000";
        } else if ($pekerjaan == "Grafik Desainer") {
            $gaji = "Rp 7.500.000";
        } else if ($pekerjaan == "Sales") {
            $gaji = "Rp 5.000.000";
        } else {
            $gaji = "Rp 0";
        }

        echo "<h1>Hasil Input</h1>";
        echo "Nama: " . $nama . "<br>";
        echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
        echo "Umur: " . $umur . " tahun<br>";
        echo "Pekerjaan: " . $pekerjaan . "<br>";
        echo "Gaji: " . $gaji;
    }
    ?>
</body>
</html>
