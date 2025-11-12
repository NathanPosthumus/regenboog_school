<?php 


// haal je op uit de form met de name attribuut
// nu sla je eigenlijk alles op in vars (alles van de form sla je op in een var)

// basic validation

// check of alles is ingevuld
if(!isset($_POST['naam'],
        $_POST['lokaal'],
        $_POST['juf_meester'],
        $_POST['aantal_leerlingen'],
        $_POST['verdieping'])) {
        die("Form data not submitted properly.");
}

// check of niks leeg is
if(empty($_POST['naam']) 
    || empty($_POST['lokaal']) 
    || empty($_POST['juf_meester']) 
    || empty($_POST['aantal_leerlingen']) 
    || empty($_POST['verdieping'])) {
    die("Please fill in all required fields.");
}

// strlen controleren
if(strlen($_POST['naam']) > 1 ||
   strlen($_POST['lokaal']) > 100 ||
   strlen($_POST['juf_meester']) > 100 ||
   !is_numeric($_POST['aantal_leerlingen']) ||
   strlen($_POST['verdieping']) > 50) {
    die("info die gegeven is is te lang of onjuist.");
}

$naam = $_POST['naam'];
$lokaal = $_POST['lokaal'];
$juf_meester = $_POST['juf_meester'];
$aantal_leerlingen = $_POST['aantal_leerlingen'];
$verdieping = $_POST['verdieping'];

require 'database.php';

$sql="INSERT INTO klassen (naam, lokaal, juf_meester, aantal_leerlingen, verdieping) 
    VALUES ('$naam', '$lokaal', '$juf_meester', '$aantal_leerlingen', '$verdieping')"; 
if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
}else
{
    echo "Error";
}




?>