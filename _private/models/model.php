<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

//users ophalen
function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `gebruikers`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getUser($gebruikersnaam) {
	$connection = dbConnect();

	$sql        = "SELECT * FROM `gebruikers` WHERE gebruikersnaam = :gebruikersnaam";

	$statement	= $connection->prepare($sql);
	$statement->execute(
		[
			'gebruikersnaam' => $gebruikersnaam
		]
	);

	return $statement->fetch();
}

//users toevoegen
function addUser($gebruikersnaam, $email, $wachtwoord) {
	$connection = dbConnect();
    $sql = "INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `email`, `wachtwoord`) VALUES (NULL, :gebruikersnaam, :email, :wachtwoord);";
	$statement = $connection->prepare($sql);
	
    return $statement->execute([
        'gebruikersnaam' => $gebruikersnaam,
        'email' => $email,
        'wachtwoord' => $wachtwoord
	]);

}

//users updaten 
function updateUser($newId, $newUsername, $newEmail) {
	$connection = dbConnect();
	$sql = "UPDATE `gebruikers` SET `gebruikersnaam` = :new_username, `email` = :new_email WHERE `gebruikers`.`id` = :new_id;";
	$statement = $connection->prepare($sql);

	return $statement->execute([
		'new_username' => $newUsername,
		'new_email' => $newEmail,
		'new_id' => $newId  
	]);

}

//users verwijderen
function delUser($userToDelete) {
	$connection = dbConnect();
    $sql = "DELETE FROM `gebruikers` WHERE `gebruikers`.`id` = :usertodelete";
	$statement = $connection->prepare($sql);
	
    return $statement->execute([
        'usertodelete' => $userToDelete
    ]);
}

function getUserByGebruikersnaam($gebruikersnaam)
{
	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE gebruikersnaam =  :gebruikersnaam";
	$statement = $connection->prepare($sql);
	$result = $statement->execute(['gebruikersnaam' => $gebruikersnaam]);

	if ($statement->rowCount() === 1) {
		return $statement->fetch();
	}

	return false;
}
