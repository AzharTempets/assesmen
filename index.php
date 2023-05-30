<center>
<?php
include "asesmen.php";
$kalku = new kalkulator();

echo '<h1>Asesmen perhitungan aritmatika OOP</h1>';
echo '<form method="POST">';
echo '<input type="text" name="x" size="3">&nbsp;';
echo '<input type="text" name="y" size="3">&nbsp;';
echo '<input type="text" name="z" size="3">&nbsp;';
echo '<br><br>';
echo '<select name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">X</option>
<option value="bagi">/</option>
</select> &nbsp;';
echo '<input type="submit" value="Hitung">';
echo '</form>';

if ($_POST) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    if($_POST['operasi'] == "tambah"){
        echo "Hasil: " . $x . " + " . $y . " + " . $z . " = " .$kalku->setTambah($x,$y,$z)."<br /><br />";
    }
    if($_POST['operasi'] == "kurang"){
        echo "Hasil: " . $x . " - " . $y . " - " . $z . " = " .$kalku->setKurang($x,$y,$z)."<br /><br />";
    }
    if($_POST['operasi'] == "kali"){
        echo "Hasil: " . $x . " X " . $y . " X " . $z . " = " .$kalku->setKali($x,$y,$z)."<br /><br />";
    }
    if($_POST['operasi'] == "bagi"){
        echo "Hasil: " . $x . " : " . $y . " : " . $z . " = " .$kalku->setBagi($x,$y,$z)."<br /><br />";
    }
}
?>
</center>