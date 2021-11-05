

<div class="navbar width" >
    <div><a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> <?php endif ?>><img src="/images/TC_logo.png" alt="logo"></a></div>
    <div class="navbar_buttons" > 
        <div><a class="cta-button" href="<?php echo url( 'registratie.form' ) ?>"<?php if ( current_route_is( 'registratie.form' ) ): ?> <?php endif ?>>Registreer</a></div>
            <?php if(isLoggedIn()):?>
            <div><a class="cta-button" href="<?php echo url( 'logout' ) ?>">logout</a></div>
                <?php else: ?>
                    <div><a class="cta-button" href="<?php echo url( 'login.form' ) ?>"<?php if ( current_route_is( 'login.form' ) ): ?> <?php endif ?>>login</a></div>
            <?php endif;?> 
</div>

