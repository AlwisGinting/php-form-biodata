<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="proses.php" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
        <input type="radio" name="gender" value="Perempuan"> Perempuan<br><br>

        <label>Hobi:</label><br>
        <input type="text" name="hobi" placeholder="Contoh: Membaca"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
