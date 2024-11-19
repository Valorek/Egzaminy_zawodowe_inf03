<?php
    $serwer='localhost';
    $user='root';
    $haslo='';
    $baza='biblioteka';

    $conn=mysqli_connect($serwer,$user,$haslo,$baza);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteka publiczna</title>
</head>
<body>
    <header>
        <h1>Biblioteka w książkowicach Wielkich</h1>

    </header>
<div class="container">
    <div class="lewy">
        <h3>Polecamy dzieła autorów</h3>
        <?php
            $zapytanie='SELECT imie,nazwisko FROM autorzy GROUP BY nazwisko;';

            $sql=mysqli_query($conn,$zapytanie);

            echo "<ol>";
            while($wiersz=mysqli_fetch_array($sql))
            {
                echo "<li>".$wiersz['imie']." ".$wiersz['nazwisko']."</li>";
            }
            echo "</ol>";
        ?>
    </div>
    <div class="srodkowy">
        <h3>ul. Czytelnicza 25, Książkowice&nbspWielkie</h3>
        <p><a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a></p>
        <img src="biblioteka.png" alt="książki">

    </div>

    <div class="prawy">
        <div class="gorny">
        <h3>Dodaj czytelnika</h3>
        <form action="biblioteka.php" method="post">
            <label for="imie">
                imie: <input type="text" name="imie">
            </label>
            <br>
            <label for="nazwisko">
                nazwisko: <input type="text" name="nazwisko">
            </label>
            <br>
            <label for="symbol">
                symbol: <input type="number" name="symbol">
            </label>
            <br>
            <input type="submit" value="DODAJ" name="dodaj">

        </form>
   
    </div>
        <div class="dol">
            <?php

                if(isset($_POST['dodaj']))
                {
                    $imie=$_POST['imie'];
                    $nazwisko=$_POST['nazwisko'];
                    $symbol=$_POST['symbol'];
    
                    $zapytanie2="INSERT INTO czytelnicy(imie,nazwisko,kod) VALUES('$imie','$nazwisko','$symbol')";
                    $sql2=mysqli_query($conn,$zapytanie2);
    
                    if($sql2){
                        echo "Czytelnik ".$imie." ".$nazwisko." został(a) dodany do bazy danych";
                        header('Location: biblioteka.php');
                    }   

                }else
                {

                }

            mysqli_close($conn);
            ?>
        </div>
    </div>
        
</div>
    <footer>
        <p>Projekt strony: Wiktor Galuszka</p>
    </footer>
</body>
</html>
