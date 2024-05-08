<?php

$unijetPin = isset($_POST["pin"]);

if($unijetPin == false){
    die("Niste unijeli pin");  // STOP
}

$pin = $_POST["pin"];
$duzinaPina = strlen($pin);

if($duzinaPina > 4 && $duzinaPina <= 6){
    echo "Uspjesno ste unijeli pin";  // STOP
}else {
    die("Pin mora imati minimalno 4 karaktera, a maksimalno 6 karaktera");
}