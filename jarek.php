<?php
                            $link = mysqli_connect('localhost', 'root', 'baza_Salon_Fryzjerski') or die ('B��d: Nie mo�na po��czy� z baz� danych!!');
                            $zapytanie = $link->query("SELECT * FORM Us�ugi");
                            while ($Uslugi = mysqli_fetch_array($zapytanie)) {
                                echo '<option value="' . $Uslugi['Uslugi'] . '">' . $Uslugi['Uslugi'] . '</option>';
                            };
                            ?>