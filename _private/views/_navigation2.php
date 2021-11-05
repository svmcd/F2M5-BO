<!-- navbar voor users die ingelogd zijn -->

<div class="navbar width" >
    <div><a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> <?php endif ?>><img src="<?php echo site_url( '/images/TC_logo.png' ) ?>" alt="logo"></a></div>
    <div class="navbar_menu" > 
        <img class="nav_profielfoto" src="<?php echo site_url( '/images/default_pfp.jpg' ) ?>" alt="">  
        <div class="dropdown">
            <div class="dropdown_hover"><i class="fas fa-ellipsis-v"></i></div>
            <div class="dropdown_menu">
                <a href="<?php echo site_url( '/gebruikers/test' ) ?>">Account</a>
                <a href="<?php echo site_url( '/login' ) ?>">Loguit</a>
            </div>
        </div>
    </div>
</div>