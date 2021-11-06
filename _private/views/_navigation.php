
<?php
$gebruiker = get_current_user();
 ?>

<?php if(isLoggedIn()):?>
    <div class="navbar width" >
    <div><a href="<?php echo url( 'feed' ) ?>"<?php if ( current_route_is( 'feed' ) ): ?> <?php endif ?>><img src="<?php echo site_url( '/images/TC_logo.png' ) ?>" alt="logo"></a></div>
    <div class="navbar_menu" > 
        <img class="nav_profielfoto" src="<?php echo site_url( '/images/default_pfp.jpg' ) ?>" alt="">  
        <div class="dropdown">
            <div class="dropdown_hover"><i class="fas fa-ellipsis-v"></i></div>
            <div class="dropdown_menu">
                <a href="<?php echo site_url('/gebruikers/'. $gebruiker)?>">Account</a>
                <a href="<?php echo url( 'logout' ) ?>">Loguit</a>
            </div>
        </div>
    </div>
</div>
    <?php else: ?>
    <div class="navbar width" >
        <div><a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> <?php endif ?>><img src="<?php echo site_url( '/images/TC_logo.png' ) ?>" alt="logo"></a></div>
        <div class="navbar_buttons" > 
            <div><a class="cta-button" href="<?php echo url( 'registratie.form' ) ?>"<?php if ( current_route_is( 'registratie.form' ) ): ?> <?php endif ?>>Registreer</a></div>
            <div><a class="cta-button" href="<?php echo url( 'login.form' ) ?>"<?php if ( current_route_is( 'login.form' ) ): ?> <?php endif ?>>login</a></div>
        </div>
    <?php endif;?> 
