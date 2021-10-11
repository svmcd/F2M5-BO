<?php $this->layout('layouts::website');?>
 
<div>
    <img class="registratie_image" src="<?php echo site_url('/images/signup_image.png');?>" alt="image">
</div>
<div class="registratie_box">
    <div>
        <h3>Welkom</h3>
        <p>Voor jongeren (16-27 j.) die zich zelfverzekerd willen
 voelen en tegenslagen omzetten in kracht.</p>
    </div>
    <form action="<?php echo url("login.verwerking")?>" method="POST">
    
        <input class="form_element" type="text" name="gebruikersnaam" value="" id="gebruikersnaam" placeholder="gebruikersnaam">
        
        <input class="form_element" type="password" name="wachtwoord" id="wachtwoord" placeholder="wachtwoord">

        <button class="form_element cta-button" type="submit">Login</button>

    </form>

    <p>of registreer <a href="<?php echo url( 'registratie.form' ) ?>"<?php if ( current_route_is( 'registratie.form' ) ): ?> <?php endif ?>>hier</a> als je nog geen account hebt.</p>
    <!-- <p>of log <a href="#">hier</a> in als je al een account hebt</p> -->
</div>