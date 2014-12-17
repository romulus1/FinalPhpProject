<?php
	require_once(__DIR__ . "/../model/config.php");	//creates connection to the server

	$query = $_SESSION["connection"]->query("CREATE TABLE posts (" //creates a table called post with an id
		. "id int(11) NOT NULL AUTO_INCREMENT," //none of them can be null.
		. "title varchar(255) NOT NULL," //adds a title with up to 255 characters
		. "post text NOT NULL,"
		. "DateTime datetime NOT NULL,"
		. "PRIMARY KEY (id) )"); //tells our table that the primary key is my ID

	if($query) {
		echo " Succesfully created table: posts"; //creates the table
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; //echos out that the table has already been created
	}

	//creates a table by running query
	$query = $_SESSION["connection"]->query("CREATE TABLE users (" //creates a table called post using the _SESSION variable connection to do a query
		. "id int(11) NOT NULL AUTO_INCREMENT, " //makes an ID for the user
		. "username varchar(30) NOT NULL, " //makes an email for user
		. "email varchar(50) NOT NULL, " //makes a username for user
		. "password char(128) NOT NULL, " //makes a password for user that has to be at least 
		. "salt char(128) NOT NULL, "
		. "PRIMARY KEY (id))");
	