<?php

namespace Website\Controllers;


class BerichtController {

public function plaats_bericht() {

    $template_engine = get_template_engine();
    echo $template_engine->render('delen');
}

}