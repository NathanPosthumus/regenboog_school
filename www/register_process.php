<?php 


// haal je op uit de form met de name attribuut
// nu sla je eigenlijk alles op in vars (alles van de form sla je op in een var)

// basic validation

// check of alles is ingevuld
if(!isset($_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        $_POST['password'],
        $_POST['role'],
        $_POST['address'],
        $_POST['city'],
        $_POST['zipcode'],
        $_POST['phonenumber'])) {
        echo("Form data not submitted properly.");
        exit();
}

// check of niks leeg is
if(empty($_POST['firstname']) 
    || empty($_POST['lastname']) 
    || empty($_POST['email']) 
    || empty($_POST['password']) 
    || empty($_POST['role']) 
    || empty($_POST['address']) 
    || empty($_POST['city']) 
    || empty($_POST['zipcode']) 
    || empty($_POST['phonenumber'])) {
    echo("Please fill in all required fields.");
    exit();
}

// strlen controleren
if(strlen($_POST['firstname']) > 100 ||
   strlen($_POST['lastname']) > 100 ||
   strlen($_POST['email']) > 100 ||
   strlen($_POST['password']) > 100 ||
   strlen($_POST['role']) > 50 ||
   strlen($_POST['address']) > 100 ||
   strlen($_POST['city']) > 100 ||
   strlen($_POST['zipcode']) > 10 ||
   strlen($_POST['phonenumber']) > 25) {
    echo("info die gegeven is is te lang of onjuist.");
    exit();
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$phonenumber = $_POST['phonenumber'];



require 'database.php';

$sql="INSERT INTO users (firstname, lastname, email, password, role, address, city, zipcode, phonenumber) 
    VALUES ('$firstname', '$lastname', '$email', '$password', '$role', '$address', '$city', '$zipcode', '$phonenumber')"; 
if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
}else
{
    echo "Error";
}




?>

<!-- id
firstname
lastname
email
password
role
address
city
zipcode
phonenumber -->