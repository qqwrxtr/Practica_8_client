<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Magazin audio/video</title>
</head>

<body>

<?php include_once("particles/header.php") ?>
    
    <section class="banner" id="banner">
        <div class="content">
            <h2>SonicVizion</h2>
            <p>Bine ați venit la magazinul nostru SonicVizion! Suntem pasionați de tehnologie și sunet de calitate și ne dorim să vă oferim o experiență 
                excepțională în ceea ce privește achiziționarea produselor audio și video.</p>
            <a href="#" class="btn">Bine ați venit!</a>    
        </div>
    </section>


    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="titleText"><span>D</span>espre Noi</h2>
                <p>Bine ați venit pe site-ul nostru dedicat pasionaților de tehnologie și divertisment! Suntem o echipă entuziastă și dedicată, <br> care pune la dispoziție o platformă online cuprinzătoare pentru a vă aduce cele mai <br> noi și inovatoare produse din domeniul <br> audio și video.
                  <br><br>  Cu o gamă diversă de produse, de la televizoare cu rezoluție înaltă și sisteme <br> audio de calitate, până la căști și accesorii, avem tot ce vă trebuie pentru a vă îmbunătăți experiența de divertisment la domiciliu sau în călătorii. Ne străduim să aducem în fața dumneavoastră cele mai bune mărci și produse de încredere, astfel încât să puteți avea încredere că investiția dumneavoastră este una de calitate și durabilitate. 
                  Vă mulțumim că ați ales să ne vizitați și vă asigurăm că vom face tot posibilul pentru a vă oferi o experiență de cumpărături de neuitat. </p>
            </div>
            <div class="col150">
                <div class="imgBx">
                    <img src="imagine2.jpg">
                </div>
            </div>
        </div>
    </section>


    <section class="products" id="products">
        <div class="title">
            <h2 class="titleText">Produsele <span>N</span>oastre</h2>
            <p>Aveți o varietate mare de produse!</p>
        </div>
        <?php

            include 'conexiune.php';


            $sql = "SELECT * FROM `products`";
            $result = mysqli_query($conexiune, $sql);


            if (mysqli_num_rows($result) > 0) {

                echo '<div class="content">';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="box">';
                    echo '<div class="imgBx">';
                    echo '<img src="' . $row['img'] . '">';
                    echo '</div>';
                    echo '<div class="text">';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '</div>';
                    echo '</div>';
                }

                echo '</div>';
            } else {
                echo 'No products found in the database.';
            }

            mysqli_close($conexiune);
        ?>

        <div class="title">
            <a href="#" class="btn">Uită-te la toate</a>
        </div>
    </section>

    
    <section class="expert" id="expert">
        <div class="title">
            <h2 class="titleText">Angajați <span>E</span>xperți</h2>
            <p>Cei mai buni angajați doar aici îi găsiți!</p>
        </div>
        <div class="content">
          <div class="box">
            <div class="imgBx">
                <img src="angajat1.jpg">
            </div>
            <div class="text">
                <h3>Casian Gheorghe</h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx">
                <img src="angajat2.jpg">
            </div>
            <div class="text">
                <h3>Ghemu Alina</h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx">
                <img src="angajat3.jpg">
            </div>
            <div class="text">
                <h3>Ciumaș Ruslan</h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx">
                <img src="angajat4.jpg">
            </div>
            <div class="text">
                <h3>Baba Andrei</h3>
            </div>
          </div>
    </section>
    
    
    <section class="testimonials" id="testimonials">
        <div class="title white">
            <h2 class="titleText"><span>R</span>ecomandările clienților</h2>
            <p>Părerile clienților despre noi!</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="parere1.jpg">
                </div>
                <div class="text">
                    <p>Am avut o experiență extraordinară la magazinul SonicVizion. Personalul a fost extrem de amabil și bine informat. Mi-au oferit sfaturi experte și m-au ajutat să găsesc sistemul audio perfect pentru acasă. Produsele pe care le-am achiziționat au fost de înaltă calitate și performanța lor este uimitoare. Recomand cu căldură acest magazin tuturor celor care caută echipamente audio/video de încredere.</p>
                    <h3>Alex Vîlcu</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="parere2.jpg">
                </div>
                <div class="text">
                    <p>Magazinul SonicVizion este cu adevărat remarcabil. Am fost impresionat de selecția lor largă de produse de înaltă calitate. Echipa de vânzări a fost foarte răbdătoare și bine informată, oferindu-mi asistență personalizată în alegerea celor mai bune căști pentru nevoile mele. Procesul de cumpărare a fost simplu și livrarea a fost promptă. Nu pot să recomand suficient acest magazin!</p>
                    <br>
                    <h3>Stanislav Moraru</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="parere3.jpg">
                </div>
                <div class="text">
                    <p>Sunt extrem de mulțumită de achiziția mea de la magazinul SonicVizion. Am cumpărat un televizor de înaltă rezoluție și calitatea imaginii este absolut uimitoare. Personalul a fost foarte profesionist și mi-au oferit informații detaliate despre produsele disponibile. Am primit și asistență excelentă după vânzare. Magazinul audio/video este cu siguranță destinația mea preferată pentru toate nevoile mele de divertisment.</p>
                    <h3>Bălan Andreea</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="contact" id="contact">
        <div class="title">
            <h2 class="titleText"><span>C</span>ontactează-ne</h2>
            <p>Pentru a ne contacta urmează pașii de mai jos!</p>
        </div>
        <div class="contactForm">
            <h3>Trimite Mesaj</h3>
            <div class="inputBox">
                <input type="text" placeholder="Nume">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Email">
            </div>
            <div class="inputBox">
                <textarea placeholder="Mesajul dumneavoastră"></textarea>
            </div>
            <div class="inputBox">
                <input type="submit" value="Trimite">
            </div>
        </div>
    </section>


    <div class="copyrightText">
        <p>Copyriaght 2023 <a href="#">Online Tutorials</a>. All Right Reserved</p>
    </div>

    
    <script src="script.js"></script>
    
</body>
</html>