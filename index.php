<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Biodata</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Font import (Optional, you can remove this if you don't want a specific font) */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #74ABE2 0%, #5563DE 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh; /* Ensure form covers entire viewport */
      margin: 0;
    }

    .container {
      width: 400px; /* Adjust width as needed */
      padding: 30px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Lighter shadow for better readability */
      text-align: center; /* Center form content horizontally */
    }

    h2 {
      color: #333;
      font-weight: 600;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column; /* Stack form elements vertically */
      gap: 15px; /* Spacing between form elements */
    }

    label {
      display: block; /* Display labels on their own line */
      margin-bottom: 5px;
      color: #555;
      font-weight: 500;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 10px; /* Adjust padding for better spacing */
      border: 1px solid #ccc;
      border-radius: 5px; /* Softer border corners */
      background-color: #f9f9f9;
      transition: border-color 0.3s;
    }

    input:focus,
    select:focus,
    textarea:focus {
      border-color: #74ABE2;
      outline: none;
    }

    button {
      background-color: #5563DE;
      color: white;
      padding: 12px 20px; /* Adjust padding for better button size */
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 15px;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #3c4fb5;
    }

    .result {
      margin-top: 20px;
    }

    .result p {
      margin-bottom: 8px;
      color: #555;
      font-weight: 500;
      line-height: 1.5; /* Adjust line-height for better readability */
    }

    .result strong {
      color: #333;
      font-weight: 600;
    }

    .back-link {
      display: inline-block; /* Display link inline */
      margin-top: 10px;
      color: #5563DE;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      transition: color 0.3s;
    }

    .back-link:hover {
      color: #3c4fb5;
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container">
  <?php
  // ... your PHP code here
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Hasil Biodata</h2>";
        echo "<div class='result'>";
        echo "<p><strong>Nama:</strong> " . htmlspecialchars($_POST["nama"]) . "</p>";
        echo "<p><strong>Jenis Kelamin:</strong> " . htmlspecialchars($_POST["jenis_kelamin"]) . "</p>";
        echo "<p><strong>Agama:</strong> " . htmlspecialchars($_POST["agama"]) . "</p>";
        echo "<p><strong>Alamat:</strong> " . htmlspecialchars($_POST["alamat"]) . "</p>";
        echo "<p><strong>Tempat Lahir:</strong> " . htmlspecialchars($_POST["tempat_lahir"]) . "</p>";
        echo "<p><strong>Tanggal Lahir:</strong> " . htmlspecialchars($_POST["tanggal_lahir"]) . "</p>";
        echo "<p><strong>Hobi:</strong> " . htmlspecialchars($_POST["hobi"]) . "</p>";
        echo "<p><strong>Cita-cita:</strong> " . htmlspecialchars($_POST["cita_cita"]) . "</p>";
        echo "<p><strong>Usia:</strong> " . htmlspecialchars($_POST["usia"]) . "</p>";
        echo "<p><strong>Asal Sekolah:</strong> " . htmlspecialchars($_POST["asal_sekolah"]) . "</p>";
        echo "</div>";
        echo "<a class='back-link' href=''>Kembali ke Form</a>";
    } else {
        echo "<h2>Form Input Biodata</h2>";
        echo "<form action='' method='post'>";
        echo "<label for='nama'>Nama:</label>";
        echo "<input type='text' name='nama' required>";
        echo "<label for='jenis_kelamin'>Jenis Kelamin:</label>";
        echo "<select name='jenis_kelamin' required>";
        echo "<option value='Laki-laki'>Laki-laki</option>";
        echo "<option value='Perempuan'>Perempuan</option>";
        echo "</select>";
        echo "<label for='agama'>Agama:</label>";
        echo "<input type='text' name='agama' required>";
        echo "<label for='alamat'>Alamat:</label>";
        echo "<textarea name='alamat' required></textarea>";
        echo "<label for='tempat_lahir'>Tempat Lahir:</label>";
        echo "<input type='text' name='tempat_lahir' required>";
        echo "<label for='tanggal_lahir'>Tanggal Lahir:</label>";
        echo "<input type='date' name='tanggal_lahir' required>";
        echo "<label for='hobi'>Hobi:</label>";
        echo "<input type='text' name='hobi' required>";
        echo "<label for='cita_cita'>Cita-cita:</label>";
        echo "<input type='text' name='cita_cita' required>";
        echo "<label for='usia'>Usia:</label>";
        echo "<input type='number' name='usia' required>";
        echo "<label for='asal_sekolah'>Asal Sekolah:</label>";
        echo "<input type='text' name='asal_sekolah' required>";
        echo "<button type='submit'>Kirim</button>";
        echo "</form>";
    }
    ?>
</div>

</body>
</html>
