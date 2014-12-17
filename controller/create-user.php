<?php
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); //filters input that is passed to the file, FILTER_SANITIZE_EMAIL makes the input display as a string and gets rid of any non-emial related characters
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); //filters input that is passed to the file, FILTER_SANITIZE_STRING makes the value display as a string
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); //filters input that is passed to the file, FILTER_SANITIZE_STRING makes the value display as a string


	$hashedPassword = crypt($password, $salt); //encrypts the password


	//creating a query that inserts into the table Users, sets values to email, username,  password, and salt
	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");
