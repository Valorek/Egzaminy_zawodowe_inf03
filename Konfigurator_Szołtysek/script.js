
kolor = document.getElementById("kolor");
felgi = document.getElementsByName("felgi");
dodatki = document.getElementsByName("dodatki");
zdjecie = document.getElementById("baza");
wypluwacz = document.getElementById("cena");

cenaBazowa = 75000;

function konfigurator() {
     kolorek = kolor.value;
     cenaKolor = (kolorek === "szary") ? 0 : 9000;
    zdjecie.src = kolorek + ".png";

    cenaFelgi = 0;
    if (felgi[1].checked) {
        cenaFelgi = 7000;
    }

     cenaCzujki = 0;
     cenaClima = 0;
     cenaNawi = 0;
     wszystko = "";
   
    if (dodatki[0].checked) { 
        cenaCzujki += 6500;
        wszystko += "Czujniki Parkowania: 6500zł<br>";
    }
    if (dodatki[1].checked) { 
        cenaClima += 8500;
        wszystko += "Climatronic: 8500zł<br>";
    }
    if (dodatki[2].checked) { 
        cenaNawi += 5000;
        wszystko += "Nawigacja: 5000zł<br>";
    }

    suma = cenaBazowa + cenaKolor + cenaFelgi + cenaCzujki + cenaClima + cenaNawi;

    wypluwacz.innerHTML =
        "Cena bazowa: " + cenaBazowa + "zł<br>" +
        "Lakier: " + cenaKolor + "zł<br>" +
        "Felgi: " + cenaFelgi + "zł<br>" +
        wszystko +
        "<hr>"+
        "<h2>"+"Suma: " + suma + "zł"+"</h2>";
}

kolor.addEventListener("change", konfigurator);
felgi[0].addEventListener("change", konfigurator); 
felgi[1].addEventListener("change", konfigurator);  
dodatki[0].addEventListener("change", konfigurator); 
dodatki[1].addEventListener("change", konfigurator); 
dodatki[2].addEventListener("change", konfigurator); 