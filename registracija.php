<?php

// var_dump($_POST);
// exit();


// PROVJERA DA LI SU IME I LOZINKA PROSLIJEDJENI
$imeProslijedjeno = isset($_POST["ime"]); // Vraca nam true ili false

if($imeProslijedjeno == false){
    die("Ime nije proslijedjeno");
}

$lozinkaProslijedjena = isset( $_POST["lozinka"]);

if($lozinkaProslijedjena == false){
    die("Niste proslijedili lozinku");
}

// PROVJERA DA LI JE IME PRAZNO


// 1. Da li je proslijedio ime ili lozinku
// ""
// "                      "
// Trim - "             a" ---- > pretvara u "a"
// Trim - "               " -----> pretvara u prazan string ""

$ime = trim($_POST["ime"]) ;

if($ime == ""){
    die("Morate unijeti ime");
}

$lozinka = trim($_POST["lozinka"]);

if($lozinka == ""){
    die("Morate unijeti lozinku");
}