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
    <title>Lokitka - Salon Fryzjerski</title>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker({dateFormat: "dd-mm-yy"});
        });
    </script>
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
                    <a class="nav-link" href="#">Oferta</a>
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


            <form method="post" action="#" name="contact_form" class="contact_form">
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
                        <label for="nazwaUsługi">Wybór usługi:</label>
                        <select id="nazwaUsługi" name="nazwaUsługi"> <!-- TODO: Fix php scripts -->
                            <?php require_once "jarek.php"; ?>
                        </select>
                    </li>
                    <li>
                        <label for="datepicker">Zarezerwuj datę:</label>
                        <input type="date" name="datepicker" id="datepicker" required>
                    </li>
					<li>
                        <label for="date">Zarezerwuj datę2:</label>
                        <input type="date" id="date" required>
                    </li>
                    <li>
                        <label for="hour">Wybierz godzinę: </label>
                        <select id="hour" name="hour" required>
                            <option value="">Wybierz godzinę:</option>
                            <option value="10">10:00</option>
                            <option value="11">11:00</option>
                            <option value="12">12:00</option>
                            <option value="13">13:00</option>
                            <option value="14">14:00</option>
                            <option value="15">15:00</option>
                            <option value="16">16:00</option>
                            <option value="17">17:00</option>
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
