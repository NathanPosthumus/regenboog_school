<?php

require 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    echo "Email or password are empty.";
    exit;
}

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if(is_array($user))
    { 
        if($password == $user['password']){
            echo "Login successful. Welcome " . $user['firstname'] . "!";
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Incorrect password.";
        }
    }
else
    {
        echo "User not found.";
    }



?>