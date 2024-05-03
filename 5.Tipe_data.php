<?php
// Get Type
$var1 = 12; //integer
echo gettype($var1);
echo "</br>";

$var2 = 99.99; //double
echo gettype($var2);
echo "</br>";

$var3 = "Informatika"; //string
echo gettype($var3);
echo "</br>";

$var4 = 'Ini petik 1'; //string
echo gettype($var4);
echo "</br>";
echo "</br>";

// Var Dump
$var1 = 12;
var_dump($var1);
echo "</br>";
$var2 = 98.99;
var_dump($var2);
echo "</br>";
$var3 = "String halo world";
var_dump($var3);
echo "</br>";
echo "</br>";

// String Double Quote Escape
$kalimat = "Sedang belajar \"PHP\"";
echo $kalimat;
echo "</br>";

// String Double Quote (Kurung Kurawal)
$nama = "Afif";
echo "{$nama}, selamat pagi";
echo "</br>";
echo '$nama, selamat pagi';
echo "</br>";
echo "</br>";

// Boolean
$benar = true;
$salah = false;
var_dump($benar);
echo "</br>";
var_dump($salah);
echo "</br>";
if($benar){
    echo "ini jalan apabila benar";
}
echo "</br>";
echo "</br>";

// Array
$array = array(121,"Joko",12414.123,'ini quote 1');
$array[] = "Informatika";
var_dump($array);

unset($array[1]);
unset($array[3]);

echo "<pre>";
var_dump($array);
echo "</pre>";
echo isset($array[1]) ? $array[1] : '';

// Array Assosiation
$pekerja = array(
    "nama" => "Afif",
    "umur" => "19",
    "asal" => "Padang",
    "tglLahir" => "10 Oktober 2004"
);
echo "<pre>";
var_dump($pekerja);
echo "</pre>";
echo $pekerja["nama"];

// Object
class Mahasiswa{
    public $nim;
    public $nama;
    public $umur;
    public $tglLahir;

    public function getNama(){
        return $this->nama;
    }
}

$mahasiswa1 = new Mahasiswa();
var_dump($mahasiswa1);
$mahasiswa1->nim = "1201212";
$mahasiswa1->nama = "Dimas";
$mahasiswa1->umur = "20";
$mahasiswa1->tglLahir = "12022004";
echo "<pre>";
var_dump($mahasiswa1);
echo "</pre>";
echo $mahasiswa1->getNama();
echo "</br>";
echo "</br>";

// Null
$kosong = null;
echo $kosong;
var_dump($kosong);
?>