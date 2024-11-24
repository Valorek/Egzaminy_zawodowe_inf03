zdjecie=document.getElementById("auto")
felgi=document.getElementsByName("fele")
dodatki=document.getElementsByName("dodatki")
cena=document.getElementById('cena')

w=document.getElementById("wypluwacz")
function formularz()
{

    kolor=document.getElementById("kolor").value
    zdjecie.src=kolor+".png"

    dodatek=75000
    wszystko=''
    if(kolor=='szary'){
        wszystko+='Lakier: '+'0 zł'+'<br>'
    }else
    {
        wszystko+='Lakier: '+'9000 zł'+'<br>'
        dodatek+=9000
    }
    if(felgi[1].checked){
        wszystko+='Felgi aluminiowe: '+'7000 zł'+'<br>'
        dodatek+=7000
    }else{
        wszystko+='Felgi stalowe: '+'0 zł'+'<br>'
    }
   
    if(dodatki[0].checked){
        wszystko+='Czujniki parkowania: '+'6500 zł' +'<br>'
        dodatek+=6500
    }
    if(dodatki[1].checked){
        wszystko+='Climatronic: '+'8500 zł' +'<br>'
        dodatek+=8500
    }
    if(dodatki[2].checked)
    {
                wszystko+='Nawigacja: '+'5000 zł' +'<br>'
                dodatek+=5000
            }
        

        cena.innerHTML="Cena bazowa: 75000 zł"+"<br>"+wszystko+'<h3>'+"RAZEM: "+dodatek+" zł"+'</h3>'
    
    




}    
document.addEventListener("change",formularz)
