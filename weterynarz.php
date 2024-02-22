<!DOCTYPE html>

<html lang="pl-PL">

<head>
<meta charset="UTF-8">
<title>Weterynarz</title>
<link rel="stylesheet" href="weterynarz.css">
</head>

<body>

<div id="baner"> <h1>GABINET WETERYNARYJNY</h1> </div>

<div id="lewy"> <h2>PSY</h2>
<?php
$con=mysqli_connect("localhost","root","","Weterynarz");
$z1 = "SELECT `id`, `imie`, `wlasciciel` FROM `zwierzeta` WHERE rodzaj = 1;";
$wynik=mysqli_query($con, $z1);
echo "<ol>";
while ($row=mysqli_fetch_assoc($wynik)){
 echo "<li>".$row['imie'] . " " .$row['wlasciciel'] . "</li>";
}
mysqli_close($con);
echo "</ol>";
?>
<h2>KOTY</h2>
<?php
echo "<ol start=5>";
$con=mysqli_connect("localhost","root","","Weterynarz");
$z2 = "SELECT `id`, `imie`, `wlasciciel` FROM `zwierzeta` WHERE rodzaj = 2;";
$wynik2=mysqli_query($con, $z2);
while ($row2=mysqli_fetch_assoc($wynik2)){
 echo "<li>".$row2['imie'] . " " .$row2['wlasciciel'] . "</li>";
}
echo "</ol>";
mysqli_close($con);
?>
</div>
<div id="srodkowy">
<h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
<?php

$con=mysqli_connect("localhost","root","","Weterynarz");
$z3 = "SELECT `id`, `imie`, `wlasciciel`, `telefon`, `szczepienie`, `opis` FROM `zwierzeta` ;";
$wynik3=mysqli_query($con, $z3);
while ($row3=mysqli_fetch_assoc($wynik3)){
 echo "Pacjent: ".$row3['imie'] . "<br>telefon właściciela: " .$row3['telefon'] ." Ostatnie szczepienie: ".$row3['szczepienie'] ." " ."informacje: " .$row3['opis'] ."<hr>";
}
mysqli_close($con);
?>
</div>
<div id="prawy">
<h2>WETERYNARZ</h2>
<a href="logo.png"><img src="logo-mini.jpg"></a><br>
<p>Krzysztof <br> Nowakowski,<br>  lekarz<br> weterynarii</p><br>
<h2>GODZINY PRZYJĘĆ</h2>
<table>
<tr>
<th>Poniedziałek</th>
<th>15:00 - 19:00</th>
</tr>
<tr>
<th>Wtorek</th>
<th>15:00 - 19:00</th>
</tr>
</table>
</div>
</body>
</html>