<?php
if (isset($_POST['submit'])) {
  $jari_jari = $_POST['jari_jari'];
  $tinggi = $_POST['tinggi'];

  if (empty($jari_jari) || empty($tinggi)) {
    $error = 'Masukkan nilai jari-jari dan tinggi!';
  } elseif (!is_numeric($jari_jari) || !is_numeric($tinggi)) {
    $error = 'Masukkan nilai yang valid!';
  } else {
    $volume = M_PI * pow($jari_jari, 2) * $tinggi;
    $hasil = "Volume tabung: " . number_format($volume, 2) . " cm³";
  }
}
?>

<html>
<head>
  <title>Volume Tabung</title>
</head>
<body>
  <h1>Volume Tabung</h1>
  <form method="post">
    <label>Jari-jari alas tabung (cm):</label>
    <input type="number" name="jari_jari" step="0.01"><br><br>
    <label>Tinggi tabung (cm):</label>
    <input type="number" name="tinggi" step="0.01"><br><br>
    <button type="submit" name="submit">Hitung</button>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <?php if (isset($hasil)) { echo "<p>$hasil</p>"; } ?>
  </form>
</body>
</html>