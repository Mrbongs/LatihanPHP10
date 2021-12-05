<?php
// Soal No 1 menggunakan Operator Aritmatika
$bil_a = 40;
$bil_b = 20;

//SOAL NO 1
echo "<h3>SOAL NO 1 OPERATOR ARITMATIKA </h3>";
// Operator Aritmatika Pertambahan
echo "<h4>Operator Aritmatika Pertambahan</h4>";
echo $bil_a + $bil_b;
echo "<hr>";

// Operator Aritmatika Perkurangan
echo "<h4>Operator Aritmatika Perkurangan</h4>";
echo $bil_a - $bil_b;
echo "<hr>";

// Operator Aritmatika Perkalian
echo "<h4>Operator Aritmatika Perkalian</h4>";
echo $bil_a * $bil_b;
echo "<hr>";

// Operator Aritmatika Pembagian
echo "<h4>Operator Aritmatika Pembagian</h4>";
echo $bil_a / $bil_b;
echo "<hr>";

// Operator Aritmatika Moudulus
echo "<h4>Operator Aritmatika Sisa Bagi (Mods) </h4>";
echo $bil_a % $bil_b;
echo "<hr>";

// Operator Aritmatika Exponent
echo "<h4>Operator Aritmatika Exponent </h4>";
echo $bil_a ** $bil_b;
echo "<hr><br>";
?>

<?php
//SOAL NO 2
echo "<h2>SOAL No 2 Operator Perbandingan </h2>";

// Operator Perbandingan Sama dengan (==)
$operator1 = 30;
$operator2 = 30;
echo "<h4>  Operator Perbandingan Sama dengan (==) </h4>";
var_dump($operator1 == $operator2); // pernyataan true karena nilainya == atau sama dengan
echo "<br>";

// Operator Perbandingan tidak sama dengan (!=)
$operator1 = 30;
$operator2 = 30;
echo "<h4> Operator Perbandingan tidak sama dengan (!=) </h4>";
// pernyataan false karena jenis tipe data sama === atau tidak sama dengan operator2
var_dump($operator1 != $operator2); 
echo "<br>";

// Operator Perbandingan identik dengan (===)
$operator1 = 30;
$operator2 = 30;
echo "<h4> Operator identik dengan (===) </h4>";
// pernyataan true karena nilainya == atau identik dengan
var_dump($operator1 == $operator2); 
echo "<br>";

// Operator Perbandingan tidak identik dengan (!==)
$operator1 = 30;
$operator2 = 30;
echo "<h4> Operator Perbandingan tidak identik dengan (!==) </h4>";
// pernyataan false karena nilainya dan jenis !== atau tidak identik dengan
var_dump($operator1 !== $operator2); 
echo "<br>";

// Operator Perbandingan lebih besar dari (>)
$operator3 = 30;
$operator4 = 40;
echo "<h4> Operator Perbandingan lebih besar dari (>) </h4>";
// pernyataan false karena operator3 lebih kecil dibandingkan operator4
var_dump($operator3 > $operator4); 
echo "<br>";

// Operator Perbandingan lebih besar atau sama dengan (>=)
$operator3 = 30;
$operator4 = 40;
echo "<h4> Operator Perbandingan lebih besar atau sama dengan (>=) </h4>";
// pernyataan false karena operator3 lebih kecil dibandingkan operator4
var_dump($operator3 >= $operator4); 
echo "<br>";

// Operator Perbandingan lebih kecil dari (<=)
$operator3 = 30;
$operator4 = 40;
echo "<h4> Operator Perbandingan lebih kecil (<) </h4>";
// pernyataan true karena operator3 lebih kecil dibandingkan operator4
var_dump($operator3 < $operator4); 
echo "<br>";

// Operator Perbandingan lebih kecil atau sama dengan (<=)
$operator3 = 30;
$operator4 = 40;
echo "<h4> Operator Perbandingan lebih kecil atau sama dengan (<=) </h4>";
// pernyataan true karena operator3 lebih kecil dibandingkan operator4
var_dump($operator3 <= $operator4); 
echo "<br>";
echo "<hr>";
echo "<br>";
?>
  

  <?php
//SOAL NO 3. Buatlah coding PHP dengan Pernyataan if dan Pernyataan if else
echo "<h2>SOAL No 3. Pernyataan if dan Pernyataan if else</h2>" ;

echo "<h4>Pernyataan if </h2>" ;
$hargamarketA = 20000;
$harganormal = 10000;
if ($hargamarketA > $harganormal) {
    echo "Harganya lebih mahal dibandingkan harga normalnya";
}

echo "<h4>Pernyataan if ke-2 </h2>" ;
$nilaiBayu = 70;
if ($nilaiBayu > 65) {
    echo "Bayu Telah Melewati nilai Rata-rata kuliahnya dengan nilai 70";
    echo "<hr>";
}

//Pernyataan if else
echo "<h4> Pernyataan if else </h2>" ;
$uangibu = 20000;
$hargabelanja = 15000;
if ($uangibu > $hargabelanja) {
    echo "Harganya sayurnya lebih murah dan uangnya kembali";
}else{
    echo "Harganya sayurnya lebih mahal dan uangnya tidak cukup";
}

echo "<h4> Pernyataan if else ke-2</h2>" ;
$suhuruangan = 20;
if ($suhuruangan == 26) {
    echo "Nilai suhunyu sesuai, Maka suhu ruangan bersifat normal dan tidak memakai AC";
}else{
    echo "Nilai suhunyu tidak sesuai, Maka suhu ruangannya dingin karena memakai AC";
}
echo "<hr>";
?>