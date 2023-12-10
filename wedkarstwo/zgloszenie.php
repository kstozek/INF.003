<?php

$polaczenie = mysqli_connect('localhost', 'root', '', 'prognoza');

$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];

$zapytanie = "INSERT INTO zawody_wedkarskie (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (NULL, '0', '$lowisko', '$data', '$sedzia');";
$wymik = mysqli_query($polaczenie, $zapytanie);
    if($zapytanie)
        echo "Dodano zawody wędkarskie";


        mysqli_close($polaczenie);
    


 ?>