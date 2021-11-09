<?php $this->layout('layouts::website');?>

<title>Feed</title>


<link rel="stylesheet" href="<?php echo site_url( '/css/feed.css' ) ?>" media="all">
<script src="<?php echo site_url( '/js/javascript.js' ) ?>"></script>

<?php if(isLoggedIn()): ?>
<div class="feed_container">
    <div class="posts_container">  
        <?php foreach($posts as $bericht): ?>
        <div class="post_container">
            <div class="bovenbalk">
                <div>
                    <a href="<?php echo site_url('/gebruikers/'. $bericht['gebruiker'])?>"><img class="profielfoto" src="<?php echo site_url( '/images/default_pfp.jpg' ) ?>" alt=""></a>
                    <div class="naam-onderwerp" >
                        <a href="<?php echo site_url('/gebruikers/'. $bericht['gebruiker'])?>"><p class="post_gebruikersnaam" ><?php echo $bericht['gebruiker'] ?></p></a>
                        <p class="post_onderwerp" ><?php echo $bericht['onderwerp'] ?></p></a>
                    </div>
                </div>
                <div class="knopjes" ><i class="fas fa-ellipsis-h"></i></div>
            </div>
            <img class="post_afbeelding" src="<?php echo site_url('/uploads'. $bericht['bestandsnaam'])?>">
            <div class="onderbalk">
                <div class="naam-beschrijving">
                    <a href="<?php echo site_url('/gebruikers/'. $bericht['gebruiker'])?>"><p class="onderbalk_gebruikersnaam" ><?php echo $bericht['gebruiker'] ?></p></a>
                    <p class="onderbalk_beschrijving" ><?php echo $bericht['beschrijving'] ?></p>
                </div>
                <div class="comment-icon"><i class="far fa-comment"></i></div>
            </div>
        </div>
        <?php endforeach; ?>
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
<?php else: ?>
    <?php 
    header('Location: registratie.form', true, 301); 
    exit();
    ?>
<?php endif; ?>