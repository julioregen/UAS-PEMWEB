<?php
session_start();

// Set session variables
$_SESSION["user_id"] = 192;
$_SESSION["username"] = "Ignatius_Julio";
$_SESSION["is_logged_in"] = true;

// Retrieve session variables
$userID = $_SESSION["user_id"];
$username = $_SESSION["username"];
$isLoggedIn = $_SESSION["is_logged_in"];

// Display session variables
echo "User ID: $userID<br>";
echo "Username: $username<br>";
echo "Is Logged In: " . ($isLoggedIn ? 'Yes' : 'No');
?>
