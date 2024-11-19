<?php
$serwer='localhost';
$user='root';
$haslo='';
$baza='podroze';

$conn=mysqli_connect($serwer,$user,$haslo,$baza);


?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl9.css">
    <title>Poznaj Europę</title>
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>

    </header>
    

    <main>
        <div class="container">
    <div class="lewy">
        <h2>Promocje</h2>

        <table>

            <tr>
                <td>Warszawa</td>
                <td>od 600zł</td>
            </tr>

            <tr>
                <td>Wenecja</td>
                <td>od 1200zł</td>
            </tr>


            <tr>
                <td>Paryż</td>
                <td>od 1200zł</td>
            </tr>

        </table>

    </div>

    <div class="srodek">
        <h2>W tym roku jedziemy do...</h2>
        <?php
        $zapytanie='SELECT nazwaPliku,podpis FROM zdjecia GROUP BY podpis;';

        $sql=mysqli_query($conn,$zapytanie);

        echo "<ul>";
            while($wiersz=mysqli_fetch_row($sql))
            {
                echo "<li>"."<img  class='obraz' src='$wiersz[0]' alt='$wiersz[1]' title='$wiersz[1]'>"."</li>";
          
            }



        echo "</ul>";



    ?>
    </div>

    <div class="prawy">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>


    </div>
</div>

    <div class="dane">
        <h3>W poprzednich latach byliśmy</h3>

        <?php
        $zapytanie2='SELECT cel,dataWyjazdu FROM wycieczki WHERE dostepna=0;';
        $sql2=mysqli_query($conn,$zapytanie2);
        echo "<ol>";
        while($wiersz2=mysqli_fetch_assoc($sql2)){
            echo "<li>"."Dnia ".$wiersz2['dataWyjazdu']." pojechalismy do ".$wiersz2['cel']."</li>";
            
        }

        echo "</ol>";

        ?>

    </div>
</main>
    
    <footer>
        <p>Strone wykonał: Wiktor Galuszka</p>
    </footer>
</body>
</html>
