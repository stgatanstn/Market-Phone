<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Biodata</h2>
        <div class="hasil">
            <p><strong>Nama:</strong> <?php echo $_POST['nama']; ?></p>
            <p><strong>Jenis Kelamin:</strong> <?php echo $_POST['jenis_kelamin']; ?></p>
            <p><strong>Agama:</strong> <?php echo $_POST['agama']; ?></p>
            <p><strong>Alamat:</strong> <?php echo $_POST['alamat']; ?></p>
            <p><strong>Tempat Lahir:</strong> <?php echo $_POST['tempat_lahir']; ?></p>
            <p><strong>Tanggal Lahir:</strong> <?php echo $_POST['tanggal_lahir']; ?></p>
            <p><strong>Hobi:</strong> <?php echo $_POST['hobi']; ?></p>
            <p><strong>Cita-cita:</strong> <?php echo $_POST['cita_cita']; ?></p>
            <p><strong>Usia:</strong> <?php echo $_POST['usia']; ?></p>
            <p><strong>Asal Sekolah:</strong> <?php echo $_POST['asal_sekolah']; ?></p>
        </div>
    </div>
</body>
</html>