<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl5.css">
    <title>Portal społecznościowy</title>
</head>
<body>
<div id="banerL">
<h2>Nasze osiedle</h2>
</div>
<div id="banerP">
<?php
$con=mysqli_connect("localhost","root","","portal");
$sql = "SELECT COUNT(id) FROM dane;";

$z=mysqli_query($con,$sql);
while(
    $row=mysqli_fetch_assoc($z)
)
{
    "echo = $sql";
}
mysqli_close($con)
?>
</div>
<div id="lewy">
<h3>Logowanie</h3>
Login<br><input type="Login"><br>
Hasło<br><input type="password"><br>
<input type="submit" value="Zaloguj">
</div>
<div id="prawy">
<h3>Wizytówka</h3>
<?php


?>
</div>
<div id="stopka">
Stronę wykonał :00000000000
</div>
    
</body>
</html>