<!doctype html>
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
                    <a class="nav-link" href="zarezerwuj.html">Zarezerwuj</a>
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
        <div class="col-lg-4 offset-lg-4">
            <form method="post" action="akcja.php" name="contact_form" class="contact_form">
                <ul>
                    <li>
                        <h2>
                            Rezerwacja
                        </h2>
                    </li>
                    <li class="text-center">
                        <?php
                        session_start();
                        ?>

                        <?php
                        $blad = 0;
                        if(isset($_POST['name']) && strlen($_POST['name']) > 1){
                            $imie = $_POST['name'];
                            $nazwisko = $_POST['surname'];
                            $telefon = $_POST['phone'];
                            $e_mail = $_POST['email'];
                            $wiadomosc = $_POST['message'];
                        }
                        if($imie == '' || $nazwisko == '' || $telefon == '' || $e_mail == '' || $wiadomosc == '')
                        {
                            $blad = 1;
                            $_SESSION['blad'] = 'Pola nie mogą być puste';
                        }
                        if($blad == 0)

                        {
                            $conn = new mysqli('localhost', 'root','','salon_fryzjerski');  // or die ('Błąd: Nie można połączyć z bazą danych!');
                            $conn -> set_charset("utf-8");
                            $sql = "INSERT INTO kontakt (email, imie, nazwisko, telefon, wiadomosc) VALUES ('$e_mail', '$imie' ,'$nazwisko','$telefon','$wiadomosc')";
                            if ($conn->query($sql) === TRUE) {
                                echo "Dziękujemy za wiadomość";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            $conn->close();
                        }

                        ?>
                    </li>
                </ul>
            </form>
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