<?php
//pertemuan 2 -php dasar
//sintaks php

// Satndat output
// echo, print adalah untuk mencektak 
//print_r juga di gunakan untuk mencarai array
// var_dump ini di bagi untuk mencari ini program di mana eror


$nama = "JhelkyWalliya 11";

// penulisan sintaks php
// penulisan HTML di dalam php
// variabel dan tipe data


// variabel
// variabel di awali dengan angka,tapi boleh menganudung angka

$nama ="UlaMountain";

// operator 
// aritmatika
// +-*/%
echo 1+1;
$x =10;
$y =20;
echo $x *$y;

// oprator pengabung string
// kalo di php pake titik .
$nama_depan ="Jhelky";
$nama_belakang="walliya";
echo $nama_depan . "" . $nama_belakang;

// operatp]or assignment
// = , +=, -=, *=, %=, .=

// indentitas ===, !==
// var_dump (1 === "1")

// oprator logoka 
// $x =30;
//  &&, ||, !

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php dasar</title>
</head>

<body>
    
    <h1><?php  echo "JhelkyWalliya11"; ?></h1>
    <h1><?php echo "UlaMountain"; ?></h1>
    <h1>helo,selamat datang <?php echo "Jhelky Walliya"; ?></h1>
    <p> ini adalah pragraf <?php echo "ini adalah paragaraf"; ?></p>
</body>

</html>