<?php

namespace Website\Controllers;


class TestController {

public function testen() {

    /* $posts = getPosts();
    foreach($posts as $post){
        echo $post['gebruiker_id']. '<br>';
        echo $post['afbeelding']. '<br>';
        echo $post['beschrijving']. '<br>';
        echo $post['datum']. '<br> <br>';
    } */

    $posts = getUsers();
    foreach($posts as $post){
        echo $post['id']. '<br>';
        echo $post['gebruikersnaam']. '<br>';
        echo $post['email']. '<br>';
        echo $post['wachtwoord']. '<br> <br>';
    }

    $gebruikersnaam = "test233";
    $email = "test233@test.com";
    $wachtwoord = "test2222";

    $result = addUser($gebruikersnaam, $email, $wachtwoord);

}

}