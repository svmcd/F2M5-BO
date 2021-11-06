<?php

namespace Website\Controllers;


class BerichtController {

public function plaats_bericht() {

    $template_engine = get_template_engine();
    echo $template_engine->render('delen');
}

public function opslaan_bericht() {

    $result = validateBerichtData($_POST, input()->file('afbeelding'));

    if ( count ($result['errors'] ) === 0 ) {
        $afbeelding = input()->file('afbeelding');

        $tmpBestandsnaam =  $afbeelding->getTmpName();

        $orgBestandsnaam = $afbeelding->getFilename();
        $orgBestandstype = $afbeelding->getExtension();

        $newBestandsnaam = sha1_file($tmpBestandsnaam) . '.' . $orgBestandstype;
         
        $destinatiePad = get_config('PUBLIC'). '/uploads' . $newBestandsnaam;
        $afbeelding->move($destinatiePad);

        $afbeelding_id = maakAfbeelding($newBestandsnaam, $orgBestandsnaam);

        $gebruiker = get_current_user();

        maakBericht($result['data']['onderwerp'], $result['data']['beschrijving'], $afbeelding_id, $gebruiker);
        
        redirect(url('feed'));
    }

    $template_engine = get_template_engine();
    echo $template_engine->render('delen', [ 'errors' => $result['errors'] ]);
}

}