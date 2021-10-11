<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `gebruikers`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

/* function getPosts() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `posts`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
} */

function addUser($gebruikersnaam, $email, $wachtwoord) {
	$connection = dbConnect();
    $sql = "INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `email`, `wachtwoord`) VALUES (NULL, :gebruikersnaam, :email, :wachtwoord);";
    $statement = $connection->prepare($sql);
    $result = $statement->execute([
        'gebruikersnaam' => $gebruikersnaam,
        'email' => $email,
        'wachtwoord' => $wachtwoord
	]);
	
	return $result;
}