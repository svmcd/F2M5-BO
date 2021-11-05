<?php $this->layout('layouts::website');?>

<link rel="stylesheet" href="<?php echo site_url( '/css/feed.css' ) ?>" media="all">
<script src="<?php echo site_url( '/js/javascript.js' ) ?>"></script>

<div class="feed_container">
    <div class="post_container">
        <div class="bovenbalk">
            <div>
                <img class="profielfoto" src="<?php echo site_url( '/images/default_pfp.jpg' ) ?>" alt="">
                <p class="post_gebruikersnaam" >gebruiker123</p>
            </div>
            <div class="knopjes" ><i class="fas fa-ellipsis-h"></i></div>
        </div>
        <img class="post_afbeelding" src="<?php echo site_url('/images/voorbeeldfoto.png') ?>" alt="">
        <div class="onderbalk">
            <div class="naam-beschrijving">
                <p class="onderbalk_gebruikersnaam" >gebruiker123</p>
                <p class="onderbalk_beschrijving" >Welkom bij de Transformers Community</p>
            </div>
            <div class="comment-icon"><i class="far fa-comment"></i></div>
        </div>
    </div>
    <div class="sidebar_container">
        <button onclick="openSidebar" class="sidebar_button"><i class="fas fa-chevron-left"></i></button>
        <div class="feed_sidebar" id="feed_sidebar" >
            <div class="onderwerpen">
                <h2>Onderwerpen</h2>
                <ul>
                    <li><a href="#">#Depressie</a></li>
                    <li><a href="#">#LGBT</a></li>
                    <li><a href="#">#Zelfverzekerd</a></li>
                    <li><a href="#">#Onzeker</a></li>
                    <li><a href="#">#MentaleGezondheid</a></li>
                </ul>
            </div>
            <a href="<?php echo site_url('/delen') ?>" class="post_balk">
                <i class="far fa-plus-square"></i>
                <p>Plaats een bericht</p>
            </a>
        </div>
    </div>
</div>