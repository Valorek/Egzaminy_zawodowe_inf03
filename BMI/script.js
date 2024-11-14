 function obliczenia()
 {
     masa=document.getElementById("waga").value
     wzrost=document.getElementById("wzrost").value

    wypluwacz1=document.getElementById("wynik")
    wypluwacz2=document.getElementById("analiza")

    dostosowane=wzrost*0.01
   
    wynik=Math.pow(dostosowane,2)
    finalny=wynik.toFixed(2)

    BMI=masa/finalny

    BMI2=BMI.toFixed(1)
    
    wypluwacz1.innerHTML="Twoj BMI "+ BMI2

    switch (true) {
        case (BMI2<18.5):
            wypluwacz2.style.color="red"
            wypluwacz2.innerHTML="Masz niedwowage"
            break;
        case (BMI2>=18.5&&BMI2<25):
            wypluwacz2.style.color="green"
            wypluwacz2.innerHTML="Wage masz w normie" 
            break;
        case (BMI2>=25&&BMI2<30):
            wypluwacz2.style.color="red"
            wypluwacz2.innerHTML="Masz nadwage"
            break;
        case (BMI2>=30&&BMI2<35):
            wypluwacz2.style.color="red"
            wypluwacz2.innerHTML="Masz otylosc 1st."
            break;
        case (BMI2>=35&&BMI2<40):
            wypluwacz2.style.color="red"
            wypluwacz2.innerHTML="Masz otylosc 2st."
            break;
        case (BMI2>=40):
            wypluwacz2.style.color="red"
            wypluwacz2.innerHTML="Masz otylosc 3st."
            break;
        default:
            break;
    }

 }