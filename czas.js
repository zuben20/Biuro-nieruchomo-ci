function czas(){
    var teraz = new Date();
        if(teraz.getHours() < 10) var end = "0"+teraz.getHours()+":";
        else var end = teraz.getHours()+":";
        if(teraz.getMinutes() < 10) end += "0"+teraz.getMinutes()+":";
        else end += teraz.getMinutes()+":";
        if(teraz.getSeconds() < 10) end += "0"+teraz.getSeconds();
        else end += teraz.getSeconds();
        document.getElementById("godzina").innerHTML = end;
}
setInterval("czas()",999);

            
               