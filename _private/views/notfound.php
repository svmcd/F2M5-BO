<?php $this->layout('layouts::website');?>

<h1 style="height: 100vh;" style="text-align: center;"><span style="font-size: 1.2em; font-weight: 800;" class="blauw">Oeps!</span> De pagina die hebt je bezocht, bestaat niet. Keer <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> <?php endif ?>>hier</a> terug naar de homepage</h1>