<?php
if (isset($_POST['submit'])) {
  $jarak = $_POST['jarak'];
  $pilihan = $_POST['pilihan'];

  if (empty($jarak) || !is_numeric($jarak)) {
    $error = 'Masukkan jarak yang Bener!';
  } else {
    switch ($pilihan) {
      case 'm':
        $hasil = $jarak * 1000;
        break;
      case 'cm':
        $hasil = $jarak * 100000;
        break;
      case 'mm':
        $hasil = $jarak * 1000000;
        break;
      default:
        $error = 'Pilihan tidak valid!';
    }
  }
}
?>

<html>
<head>
  <title>Konversi Jarak</title>
</head>
<body>
  <h1>Konversi Jarak</h1>
  <form method="post">
    <label for="jarak">Masukkan jarak (km):</label>
    <input type="number" id="jarak" name="jarak">
    <select id="pilihan" name="pilihan">
      <option value="m">Kilometer ke Meter</option>
      <option value="cm">Kilometer ke Centimeter</option>
      <option value="mm">Kilometer ke Milimeter</option>
    </select>
    <button type="submit" name="submit">Hitung</button>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <?php if (isset($hasil)) { echo "<p>Hasil konversi: $hasil $pilihan</p>"; } ?>
  </form>
</body>
</html>