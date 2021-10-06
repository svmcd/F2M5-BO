

<div class="navbar width" >
    <div><a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> <?php endif ?>><img src="images/TC_logo.png" alt="logo"></a></div>
    <div><a class="cta-button" href="<?php echo url( 'login.form' ) ?>"<?php if ( current_route_is( 'login.form' ) ): ?> <?php endif ?>>Login</a></div>
</div>