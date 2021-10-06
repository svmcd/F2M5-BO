<?php

namespace Website\Controllers;

/**
 * Class LoginController
 */

class LoginController {

	public function login_form() {

		$template_engine = get_template_engine();
		echo $template_engine->render('login_form');

	}
}