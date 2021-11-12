<?php $this->layout('layouts::website');?>

<link rel="stylesheet" href="<?php echo site_url( '/css/home.css' ) ?>" media="all">

<title>Homepage</title>

<!-- <?php $this->start('sidebar')?> -->
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->
<!-- <?php $this->stop()?> -->

<div>
    <div class="sectionLight">
        <h1>Life sucks<br>sometimes.</h1>
        <h2 class="purple" id="bold">Maar je staat er niet alleen voor.</h2>
        <p><b>De transformers Community is er voor jongeren die zelfverzekerd willen zijn en tegenslagen<br>omzetten in kracht. We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</b></p>
        <a href="<?php echo url( 'registratie.form' ) ?>"<?php if ( current_route_is( 'registratie.form' ) ): ?> <?php endif ?> ><button class="btnOrange">Meld je aan!</button></a>
    </div>

    <div class="sectionDark">
        <h2>Wij zijn een groeiende beweging van jongeren die<br>zich inzet voor <span class="orange">mentale gezondheid.</span></h2>
        <p>We leven in een samenleving waar onvoldoende ruimte is voor onze mentale<br>gezondheid. <b>Daar willen wij samen verandering in brengen!</b> We zijn een<br>community van jongeren die <b>ervaringen</b> en <b>tips</b> uitwisselt op het gebied van<br><b>mentale gezondheid</b> en persoonlijke ontwikkeling. Zo creëeren we meer<br>openheid <b>en helpen we elkaar om te groeien.</b></p>
        <button class="btnOrange">Onze missie en visie</button>
    </div>

    <div class="sectionLight container">
        <div>
            <h3>De online community</h3>
            <h2 class="purple">Praat over dingen die je eerder<br>nergens kwijt kon.</h2>
            <p>In onze <b>online community</b> kan je binnen een veilige omgeving (anoniem) <b>jouw<br>ervaringen en gevoelens delen.</b> Hierbij helpen en steunen we elkaar. Ook<br>worden er wekelijks <b>praktische tips</b> gedeeld die jou helpen om zelfverzekerd te<br>zijn en om te gaan met moeilijke situaties.</p>
            <a href="<?php echo url( 'registratie.form' ) ?>"<?php if ( current_route_is( 'registratie.form' ) ): ?> <?php endif ?> ><button class="btnPurple">Meld je gratis aan!</button></a>
        </div>
        <div class="orangeBox">
            <p>Ervaringen uit de community </p>
            <p><b>“Ik kan mij zo gemakkelijk aanpassen aan anderen, dat ik mijzelf op een gegeven moment kwijt was geraakt.<br><br>Nu probeer ik mijzelf minder snel weg te cijferen voor anderen en juist meer rekening te houden met mijzelf.”</b></p>
            <p>Lisa</p>
        </div>
    </div>

    <div class="sectionDark">
        <h2>We <span class="orange">helpen</span> elkaar met onderwerpen als: </h2>
        <div class="list">
            <p>Zelfverzekerder worden en je eigen pad volgen.</p>
            <p>Een positieve mindset.</p>
            <p>Grenzen aangeven.</p>
            <p>Omgaan met verwachtingen van andere.</p>
            <p>Je kwetsbaar opstellen.</p>
            <p>Ontdekken wat écht belangrijk is voor jou.</p>
        </div>
    </div>

    <div class="sectionLight">
        <h2>Wil je <span class="orange">impact</span> maken?</h2>
        <p>Het is onze missie om kennis over mentale gezondheid mainstream te maken en jongeren te<br>employeren om mentaal gezond te zijn. <b>En daar hebben wij jou bij nodig!</b><br><br>Wil jij je ook inzetten voor een samenleving waarin onze mentale gezondheid centraal staat?<br>Meld je aan als vrijwilliger!</p>
        <a href="<?php echo url( 'registratie.form' ) ?>"<?php if ( current_route_is( 'registratie.form' ) ): ?> <?php endif ?> ><button class="btnPurple">Word Transformer</button></a>
    </div>

    <div class="sectionDark">
        <h2>Geen tijd, maar wel bijdragen? <span class="orange">Doneer!</span></h2>
        <p><b>Zou je ons graag willen helpen, maar heb je gewoonweg de tijd niet (en wel<br>een paar eurotjes over)?</b><br><br>Dan kan je alsnog impact maken door te doneren wat jij kwijt kan. Hiermee help<br>je ons onder andere om meer (h)erkenning en peer support te creëren tussen<br>jongeren onderling, en om tools te ontwikkelen die jongeren helpen mentaal<br>gezond te zijn.</p>
        <button class="btnOrange">Doneer</button>
    </div>
</div>







