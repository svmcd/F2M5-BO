<?php $this->layout('layouts::website');?>

<div class="gebruiker_container" >
    <div class="profiel_box" >
        <div class="profielfoto"><img src="../images/default_pfp.jpg"></div>
        <p class="gebruikersnaam" >@<?php echo $gebruikers['gebruikersnaam']; ?></p>        
    </div>
    <div class="berichten_box">
        <div id="titel" >Berichten</div>
        <div class="berichten">
            <div>Nog geen berichten</div>
            <div></div>
        </div>
    </div>
</div>
