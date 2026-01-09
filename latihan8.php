<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>LATIHAN 8 PEMROGRAMAN WEB</title>
</head>
<body>

<h3>Array 1 Dimensi (3 cara deklarasi)</h3>

<?php
echo "<b>1) Cara 1: array()</b><br/>";
$buah1 = array("Apel", "Jeruk", "Mangga");
echo "buah1[0] = " . $buah1[0] . "<br/>";
echo "buah1[1] = " . $buah1[1] . "<br/>";
echo "buah1[2] = " . $buah1[2] . "<br/><br/>";

echo "<b>2) Cara 2: index manual</b><br/>";
$buah2[0] = "Semangka";
$buah2[1] = "Anggur";
$buah2[2] = "Pisang";
echo "buah2[0] = " . $buah2[0] . "<br/>";
echo "buah2[1] = " . $buah2[1] . "<br/>";
echo "buah2[2] = " . $buah2[2] . "<br/><br/>";

echo "<b>3) Cara 3: array asosiatif</b><br/>";
$buah3 = array(
  "merah" => "Strawberry",
  "kuning" => "Pisang",
  "hijau" => "Melon"
);
echo "buah3['merah'] = " . $buah3["merah"] . "<br/>";
echo "buah3['kuning'] = " . $buah3["kuning"] . "<br/>";
echo "buah3['hijau'] = " . $buah3["hijau"] . "<br/><br/>";

echo "<b>Menampilkan semua isi buah1 dengan foreach:</b><br/>";
foreach ($buah1 as $i => $val) {
    echo "Index $i : $val <br/>";
}
?>

</body>
</html>
