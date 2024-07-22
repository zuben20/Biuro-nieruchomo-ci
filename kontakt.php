<!doctype html>
<html lang="pl">

    <head>
        
        <meta charset="utf-8">
        <meta name="author" content="Paweł Wojtaszek">
        <meta name="description" content="Biuro Podróży Stolice Europy">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="GRAFIKA/favicon.jpg">
        <title>CAPITALS</title>
    
        <script>
                function wyslij(){
                var imie = document.getElementById('imie').value;
                var nazwisko = document.getElementById('nazwisko').value;
                var mail = document.getElementById('e-mail').value;
                var tel = document.getElementById('telefon').value;
                var dataw = document.getElementById('data').value;
                var ldni = document.getElementById('dni').value;
                    
                var imieCheck=/^[a-zA-Z]{2,}$/;
                var NazwiskoCheck=/^[a-zA-Z]{2,}$/;
                var telCheck=/^\d{9}$/;
                var mailCheck=/\w{1,}[@]\w{1,}[.]\w{2,3}/;   
                    
                var suma=0;
                    
                if(imieCheck.test(imie)){
                suma++;    //1
                }
                    
                if(NazwiskoCheck.test(nazwisko)){
                suma++;    //2
                }
                    
                if(telCheck.test(tel)){
                suma++;    //3
                }
                    
                if(mailCheck.test(mail)){
                suma++;    //4
                }
                    
                    
                if(dataw != null && ldni != 0){
                suma++;    //5
                }
                    
                if(ldni <= 0){
                suma--;
                }
                    
                if(suma == 5){
                alert('Twój formularz został wysłany');
                }
                else{
                alert('Twój formularz jest źle wypełniony');
                }
            }
            
        </script>
        <script src="czas.js"></script>
        
    </head>
    
    <body onload="czas()">

        
        <main>

                <header>
                    <nav>
                        <a href="index.html"><img style="margin-left:10%;margin-bottom:0.1%;  " class="zdj1" src="GRAFIKA/logo.png" alt="logo"></a>
                        <a class="navtekst" href="index.html">HOME</a>
                        <a class="navtekst" href="galeria.html">GALERIA</a>
                        <a class="navtekst" href="kontakt.php">KONTAKT</a>
                        <a class="navtekst" href="oferty.html">OFERTY</a>
                        <a class="navtekst" href="promocje.html">PROMOCJE</a>
                        <span class="navtekst2" style="margin-left: 5em;">AKTUALNY CZAS : <span id="godzina"></span></span>
                    </nav>
                </header>


            
                    <h1 style="text-align: center">KONTAKT</h1>
            
                <div class="content4" >

                    <div class="leftkontakt">
                    
                    <form action="kontakt.php" method="post">
                        <h2>Uzupełnij formularz:</h2>
                        <label><a>Imie:</a> </label><br>
                        <input type="text" id="imie" name="imie" placeholder="Jan"><br><br>
                        
                        <label><a>Nazwisko:</a> </label><br>
                        <input type="text" id="nazwisko" name="nazwisko" placeholder="Kowalski"><br><br>
                        
                        <label><a>E-mail: </a></label><br>
                        <input type="text" id="e-mail"name="e-mail" placeholder="kowalski@gmail.com"><br><br>
                        
                        <label><a>Nr telefonu:</a> </label><br>
                        <input type="number" id="telefon" name="telefon" placeholder="123123123"><br><br>
                        
                        <label><a>Data wyjazdu: </a></label><br>
                        <input type="date" id="data" name="data"><br><br>
                        
                        <label><a>Liczba dni: </a></label><br>
                        <input type="number" id="dni" name="dni"><br><br>
                        
                        <input type="submit" onclick="wyslij()"> <input type="reset" onclick="wyslij()"><br>
                        
                    </form>
                    
                    </div>
                    
                    
                    <span style="width: 5%;"></span>
                    
                    
                    <div class="rightkontakt">
                        
                        <button><a href="kontakt.php?id=kontaktowy">Kontakt</a></button>
                        
                        <button><a href="kontakt.php?id=wyszukaj">Wyszukiwarka</a></button>
                        
                        
                          <?php
                        
                        $host = 'localhost';
                        $user = 'root';
                        $pass = '';
                        $base = 'projekt';
                        
                            $con = mysqli_connect($host,$user,$pass,$base);
                        
                        
                        
                        
                        
                          @$id=$_GET['id'];
                            if($id == "kontaktowy"){
                              include "kontaktowy.html";
                            }
                            if($id == "wyszukaj"){
                              include "wyszukaj.html";
                            }
                          
                        
                        $imie = $_POST['imie'];
                        $nazwisko = $_POST['nazwisko'];
                        $email = $_POST['e-mail'];
                        $telefon = $_POST['telefon'];
                        $data = $_POST['data'];
                        $dni = $_POST['dni'];
                        
                        
                        mysqli_query($con,"INSERT INTO dane(imie, nazwisko, e-mail, telefon, data, dni) VALUES ('$imie','$nazwisko','$email',' $telefon','$data','$dni')");
                        
                        mysqli_close($con);
                        
                        ?>
                        
                        
                    </div>
                </div>

                
            
            
            
            </main>
            
            
        
            <footer style="margin-top: 7em;">
                
                <p style="margin-bottom:0;padding-top: 0.5%">Copyright 2023 Paweł Wojtaszek 4Ti ZSIPO </p>
                <a href="#" ><img style="width: 3vw;" src="GRAFIKA/ig.png" alt="zdj"></a>
                <a href="#" ><img style="width: 3vw;" src="GRAFIKA/fb.png" alt="zdj"></a>
                <a href="#" ><img style="width: 3vw;" src="GRAFIKA/twitter.png" alt="zdj"></a>

            </footer>
            
            
        
    </body>
</html>

