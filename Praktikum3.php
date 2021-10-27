
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Konversi</title>
</head>


<body>

<h1 style ="display:cente;margin:auto;"> Tabel Konversi Berat Barang </h1>
</br>

   <?php
   	$barang= array("Kol","Bayam " ,"Beras", "Gula", "Minyak","Terong");
    $stokBarang= array (5,10,25,15,20,0);
   ?>
   
    <table border="1">
<tr>
    <th>No</th>
    <th>Nama Barang </th>
    <th>Stok(kg) </th>
    <th>Berat (kg)</th>
    <th>Berat (gram)</th>
    <th>Berat (milligram)</th>
    <th>Berat (Liter)</th>
</tr>
<tr>
<td>1 </br> 2 </br> 3 </br> 4 </br> 5 </br> 6 </td>


<td> 
<?php
for ($x=0; $x<count($barang);$x++){
echo $barang[$x]."</br>";
}
?>
</td>


<td>
<?php
for ($x=0; $x<count($barang)-1;$x++){
echo $stokBarang[$x]."</br>";
}
echo "<font color='red'>kosong</font><br>";
?>
</td>

<td>
<?php
for ($x=0; $x<count($barang);$x++){
$beratKg=$stokBarang[$x]*1;
echo $beratKg."</br>";
}
?>
</td>


<td>
<?php
for ($x=0; $x<count($barang);$x++){

$beratKg=$stokBarang[$x]*1000;
echo $beratKg."</br>";

}

?>
</td>


<td>
<?php
for ($x=0; $x<count($barang);$x++){
$beratKg=$stokBarang[$x]*1000*1000;
echo $beratKg."</br>";
}
?>
</td>


<td>
<?php
for ($x=0; $x<count($barang);$x++){
if ( $x==4){
$berat = $stokBarang[4]*0.753;
echo $berat."</br>";
}
else {

echo "- </br>";
}
}

?>
</td>
</tr>

