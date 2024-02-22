<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
    <h1>Ozdoby-skelp</h1>
    </div>
    <div id="lewy">
    <h2>OZDOBY</h2>
    <a href="Galeria.html">Galeria</a>
    <a href="zamowienia.php">Zamówienie</a>
    </div>
    <div id="środkowy">
        <p>Dodaj użytkownika</p>
        
        <form action="" method="post">
            Imię<br><input type="text">
            Nzawisko<br><input type="text">
            e-mail<br><input type="email">
            <input type="button" value="Wyślij">
            <?php
            $con = mysqli_connect("localhost", "root", "", "sklep");
            $sql = "";
            $z=mysqli_query($con,$sql);
          if("empty"){
                echo "proszę wpisać dane";
          }
          {
            echo "dane wpisane poprawnie";
          }
            mysqli_close($con);
            ?>
        </form>
    </div>
    <div id="prawy">
    <img src="animacja.gif">
    </div>
    <div id="stopka">
    <h3>Autor stony:0000000000</h3>
    </div>
    
</body>
</html>