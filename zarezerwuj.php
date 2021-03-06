﻿<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css\walidacja.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
    <link rel="icon" href="img\logoSalonu1.ico">
    <title>Lokitka - Salon Fryzjerski</title>
</head>
<body>


<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand lokitka" href="index.html">Lokitka</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="oferta.html">Oferta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pielegnacja.html">Pielęgnacja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeria.html">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="zarezerwuj.php">Zarezerwuj</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.html">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main">
    <div class="row" style="width: 100%">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">


            <form method="post" action="akcja.php" name="contact_form" class="contact_form">
                <ul>
                    <li>
                        <h2>Rezerwacja</h2>
                    </li>
                    <li>

                        <label for="name">Imię:</label>
                        <input type="text" name="name" id="name" required maxlength="50" placeholder="Jan"
                               pattern="[A-ząśżźćęółń]+">

                    </li>
                    <li>
                        <label for="surname">Nazwisko:</label>
                        <input type="text" name="surname" id="surname" required maxlength="50" placeholder="Kowalski"
                               pattern="[A-ząśżźćęółń]+">

                    </li>
                    <li>
                        <label>Płeć:</label>
                        <input title="Kobieta" type="radio" name="sex" value="k" required>Kobieta<br>
                        <input title="Mężczyzna" type="radio" name="sex" value="m" required>Mężczyzna
                    </li>
                    <li>
                        <label for="phone">Tel kom.:</label>
                        <input type="text" name="phone" id="phone" required maxlength="11" placeholder="XXX-XXX-XXX"
                               pattern="\d{3}-\d{3}-\d{3}">

                    </li>
                    <li>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" maxlength="40"
                               placeholder="jan.kowalski@poczta.pl"
                               pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}"
                               required>

                    </li>

                    <li>
                        <label for="nazwaUslugi">Wybór usługi:</label>
                        <select id="nazwaUslugi" name="nazwaUslugi"> <!-- TODO: Fix php scripts -->
                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'salon_fryzjerski'); //or die ('Blad: Nie mo�na po��czy� z baz� danych!!');
                            $conn -> set_charset('utf8');
                            $zapytanie = $conn->query("SELECT * FROM uslugi");
                            while ($usluga = mysqli_fetch_array($zapytanie)) {
                                echo '<option value="' . $usluga['iduslugi'] . '">' . $usluga['nazwa'] . '</option>';
                            }
                            ?>
                        </select>
                    </li>
                    <li>
                        <label for="date">Zarezerwuj datę:</label>
                        <input type="date" name="date" id="date" required>
                    </li>
                    <li>
                        <label for="hour">Wybierz godzinę: </label>
                        <select id="hour" name="hour" required>
                            <option value="">Wybierz godzinę:</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                        </select>
                    </li>

                    <li>
                        <button type="submit" class="submit">Wyślij</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
</main>
<footer class="blog-footer margin-gora">
    <div class="row container-fluid">
        <div class="col-md-5 offset-md-1">
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.5868709121432!2d19.450646648662005!3d51.74059130144655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a34e64ab91f4f%3A0xfa91387b75272378!2sZesp%C3%B3%C5%82+Szk%C3%B3%C5%82+Ponadgimnazjalnych+nr+9+im.+Komisji+Edukacji+Narodowej!5e0!3m2!1spl!2spl!4v1487633554613"
                        width="500" height="350" frameborder="0" class="d-none d-sm-block"></iframe>
            </p>
        </div>
        <div class="col-md-4 offset-md-2 footer-napis">
            <h2 class="text-white">
                Kontakt
            </h2>
            <p class="text-white">
                Salon Fryzjerski Lokitka
                <br>
                al. Politechniki 38
                <br>
                Tel. - 566-566-566
                <br>
                e-mail - Lokitka@fryzjernia.pl
            </p>
            <img class="img-fluid" src="img\logoSalonu1.png" alt="logo">
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
