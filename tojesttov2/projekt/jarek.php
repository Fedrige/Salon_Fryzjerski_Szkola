<?php
                            $link = mysqli_connect('localhost', 'root', 'baza_Salon_Fryzjerski') or die ('B³¹d: Nie mo¿na po³¹czyæ z baz¹ danych!!');
                            $zapytanie = $link->query("SELECT * FORM Us³ugi");
                            while ($Uslugi = mysqli_fetch_array($zapytanie)) {
                                echo '<option value="' . $Uslugi['Uslugi'] . '">' . $Uslugi['Uslugi'] . '</option>';
                            };
                            ?>