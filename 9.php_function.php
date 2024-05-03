<?php
// String
$kalimat = "Selamat Pagi Sahabatku";
echo strtolower($kalimat);
echo "</br>";
echo strtoupper($kalimat);
echo "</br>";
$kalimat2 = "halo semuanya";
echo ucfirst($kalimat2);
echo "</br>";
$kalimat3 = "Halo semuanya";
echo lcfirst($kalimat3);
echo "</br>";

// Trim
$a = "  halo  ";
echo "</br>";
echo $a;
$trim_a = trim($a);
echo "</br>";
echo $trim_a;
echo "</br>";
echo "</br>";

// Number Format
echo "</br>";
echo number_format(56.99, 0, ",", ".");
echo "</br>";
echo number_format(101020103203012.921329, 2, ",", ".");
echo "</br>";

// Substring
$kalimat = "mari kita belajar php di Tel U Surabaya prodi Informatika";
echo "</br>";
echo substr($kalimat,0);
echo "</br>";
echo substr($kalimat,15);
echo "</br>";
echo substr($kalimat,0.7);
echo "</br>";
echo substr($kalimat,0.11);
echo "</br>";
echo "</br>";

// Array Count
$zoo = ["gajah", "rusa", "jerapah", "singa", "serigala"];
for ($i = 0; $i < count($zoo); $i++) {
    echo "</br>";
    echo "Hewan ke " . $i+1 . " adalah " . $zoo[$i];
}
echo "</br>";
echo "</br>";

// Array Push dan Pop
 $siswa = ["Afif", "Falah", "Dinov"];
 $siswa1 = "Bagus";
 var_dump($siswa);
 array_push($siswa, $siswa1);
 echo "</br>";
 var_dump($siswa);
 echo "</br>";

 $popsiswa = array_pop($siswa);
 echo $popsiswa;
 echo "</br>";
 var_dump($siswa);
 echo "</br>";

 $popsiswa = array_pop($siswa);
 echo $popsiswa;
 echo "</br>";
 var_dump($siswa);
 echo "</br>";
 echo "</br>";

//in array
$siswa = ["zidan","irfan","zaky","joko","rani"];
$cek = in_array("joko", $siswa);
var_dump($cek);
if($cek){
    echo "joko ada di dalam array siswa";
}
echo "</br>";
$cek2 = in_array("kevin", $siswa);
var_dump($cek2);
echo "</br>";
?>