<?php

namespace Website\Controllers;


class TestController {

    public function testen() {

        // alle posts ophalen
        /* $posts = getPosts();
        foreach($posts as $post){
            echo $post['gebruiker_id']. '<br>';
            echo $post['afbeelding']. '<br>';
            echo $post['beschrijving']. '<br>';
            echo $post['datum']. '<br> <br>';
        } */
    
        // users ophalen
        /* $posts = getUsers();
        foreach($posts as $post){
            echo $post['id']. '<br>';
            echo $post['gebruikersnaam']. '<br>';
            echo $post['email']. '<br>';
            echo $post['wachtwoord']. '<br> <br>';
        } */

        // users toevoegen
        /* $gebruikersnaam = "test233";
        $email = "test233@test.com";
        $wachtwoord = "test2222";
        $result = addUser($gebruikersnaam, $email, $wachtwoord); */

        // users aanpassen
        /* $newUsername = 'testlol';
        $newEmail = 'testlol@test.com'; 
        $newId = 9;
        $result = updateUser($newId, $newUsername, $newEmail); */

        // users verwijderen
        /* $userToDelete = 13;
        delUser($userToDelete); */

    }

}