<?php

namespace Website\Controllers;

/**
 * Class RegistratieController
 *
 * Deze handelt het registreren van gebruikers af
 *
 */

class RegistratieController {

public function form() {

    $template_engine = get_template_engine();
    echo $template_engine->render('registratie_form');
}

public function verwerking() {
    echo "lol";
}

}