<?php

$provjeriIme = isset($_POST["ime"]); // Vraca True ili False

// echo $provjeriIme;
if($provjeriIme == false){
    die("Niste upisali ime");
}

// PROVJERA DUZINE IMENA

$ime = strtolower( $_POST["ime"]);
$duzinaImena = strlen($ime);
// echo $duzinaImena;

if($duzinaImena < 3){
    die("Ime ne smije biti krace od 3 slova");
}

$imena = ["toma", "petar", "marko"];


if(in_array($ime, $imena)){
    echo "Pronasli smo korisnika";
}else {
    die("Nismo pronasli korisnika u listi");
}