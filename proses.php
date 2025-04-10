<?php
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$gender = $_POST['gender'];
$hobi = $_POST['hobi'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Biodata</title>
</head>
<body>
    <h2>Hasil Biodata</h2>
    <p><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></p>
    <p><strong>Umur:</strong> <?php echo htmlspecialchars($umur); ?> tahun</p>
    <p><strong>Jenis Kelamin:</strong> <?php echo htmlspecialchars($gender); ?></p>
    <p><strong>Hobi:</strong> <?php echo htmlspecialchars($hobi); ?></p>
    <br>
    <a href="index.php">Kembali ke form</a>
</body>
</html>
