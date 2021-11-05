<?php

namespace Website\Controllers;

class GebruikersController {

	public function gebruikers($gebruikersnaam) {

		$gebruiker = getUser($gebruikersnaam);

		$template_engine = get_template_engine();
		echo $template_engine->render('gebruikers', ['gebruikers' => $gebruiker]); 

	}
}