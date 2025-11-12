<?php 


// haal je op uit de form met de name attribuut
// nu sla je eigenlijk alles op in vars (alles van de form sla je op in een var)

// basic validation

// check of alles is ingevuld
if(!isset($_POST['naam'],
        $_POST['achternaam'],
        $_POST['nummer'])) {
        die("Form data not submitted properly.");
}

// check of niks leeg is
if(empty($_POST['naam']) 
    || empty($_POST['achternaam']) 
    || empty($_POST['nummer'])) {
    die("Please fill in all required fields.");
}

// strlen controleren
if(strlen($_POST['naam']) > 100 ||
   strlen($_POST['achternaam']) > 100 ||
   !is_numeric($_POST['nummer'])) {
    die("info die gegeven is is te lang of onjuist.");
}

$naam = $_POST['naam'];
$achternaam = $_POST['achternaam'];
$nummer = $_POST['nummer'];

require 'database.php';

$sql="INSERT INTO klassen (naam, achternaam, nummer) 
    VALUES ('$naam', '$achternaam', '$nummer')"; 
if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
}else
{
    echo "Error";
}




?>