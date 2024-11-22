<?php
    $serwer='localhost';
    $user='root';
    $haslo='';
    $baza='kino';


    $conn=mysqli_connect($serwer,$user,$haslo,$baza);
    if(!$conn){
        echo "Błąd połączenia!";
    }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>KINO "Za rogiem"</title>
</head>
<body>
    <main>
        <header>
            <img src="baner.jpg" alt="baner">

        </header>
        <div class="lewy">
            <ul>
                <li><a href="index.html">Strona główna</a></li>
            </ul>
            <hr>
            <form action="rezerwacje.php" method="post">
                <label for="data">Data i godzina seansu</label>
                <br>
                <input type="date" name="data">
                <input type="time" name="godzina">
                <input type="submit" value="Pokaż" name='pokaz'>
            </form>

        </div>
        <div class="prawy">
            <?php
            if(!isset($_POST['pokaz']))
            {
                echo " ";
            }
            else{
                if(!empty($_POST['data'])&&!empty($_POST['godzina']))
                {

                    $data=$_POST['data'];
                    $godzina=$_POST['godzina'];
    
                    $zapytanie="SELECT Miejsce,Rzad FROM `rezerwacje` WHERE Data='$data' AND Godzina='$godzina'";
                    $sql=mysqli_query($conn,$zapytanie);
                    $rezerwacja_array=[];
                    while($wiersz=mysqli_fetch_array($sql))
                    {
                        $rezerwacja_array[]=$wiersz;
                    } 
                echo "<div class='sala'>";
                echo "<p>"."EKRAN"."</p>";
                echo "<table>";
                for($i=1;$i<=15;$i++)
                {
                    echo "<tr>";
                    echo "<th>".$i."</th>";
                    for($j=1;$j<=20;$j++)
                    {
                        $zajete=false;
                        foreach($rezerwacja_array as $rezerwacja)
                        {
                            if($rezerwacja['Rzad']==$i&&$rezerwacja['Miejsce']==$j){
                                $zajete=true;
                            }
                        }
                        if($zajete==true){
                            echo "<td class='czerwony'>".$j."</td>";  
                        }
                        else
                        {
                            echo "<td class='szary'>".$j."</td>";  
                        }
                           
                    }
                    echo "</tr>";

                }
                echo "</table>";
                echo "</div>";
                }
                else{
                    echo "Podaj poprawne dane!";
                }
               
            }

            ?>
        </div>

        <footer>
            <h5>Egzamin INF.03 - AUTOR: Wiktor Galuszka</h5>
        </footer>
    </main>
    
</body>
</html>