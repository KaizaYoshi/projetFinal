<div id="presentation">Création de Pokémon</div>
<div id="names" class="createForm">
    <div>Choisissez un nom</div>
    <div class="autocomplete" style="width:300px;">
        <input id="name" type="text" autocomplete="off" placeholder="Nom du Pokémon">
    </div>
</div>
<div id="abilities" class="createForm">
    <div>Choisissez un talent</div>
    <div class="autocomplete" style="width:300px;">
        <input id="ability" type="text" placeholder="Nom du talent">
    </div>
</div>
<div id="moves" class="createForm">
    <div>Choisissez jusqu'a 4 attaques</div>
    <div class="autocomplete" style="width:20%;">
        <input id="move1" type="text" placeholder="Nom de l'attaque">
    </div>
    <div class="autocomplete" style="width:20%;">
        <input id="move2" type="text" placeholder="Nom de l'attaque">
    </div>
    <div class="autocomplete" style="width:20%;">
        <input id="move3" type="text" placeholder="Nom de l'attaque">
    </div>
    <div class="autocomplete" style="width:20%;">
        <input id="move4" type="text" placeholder="Nom de l'attaque">
    </div>
</div>
<div id="abilities" class="createForm">
    <div>Choisissez une nature</div>
    <div class="autocomplete" style="width:300px;">
        <input id="nature" type="text" placeholder="Nom de la nature">
    </div>
</div>
<div id="abilities" class="createForm">
    <div>Choisissez un objet</div>
    <div class="autocomplete" style="width:300px;">
        <input id="item" type="text" placeholder="Nom du l'objet">
    </div>
</div>
<div id="abilities" class="createForm">
    <div>Choisissez une ball</div>
    <div class="autocomplete" style="width:300px;">
        <input id="ball" type="text" placeholder="Nom de la Ball">
    </div>
</div>
<div id="abilities" class="createForm">
    <div>Choisissez les IVs</div>
    <div class="autocomplete" style="width:16%;">
        <input id="iv1" type="text" placeholder="IV - PV">
    </div>
    <div class="autocomplete" style="width:16%;">
        <input id="iv2" type="text" placeholder="IV - Attaque">
    </div>
    <div class="autocomplete" style="width:16%;">
        <input id="iv3" type="text" placeholder="IV - Défense">
    </div>
    <div class="autocomplete" style="width:16%;">
        <input id="iv4" type="text" placeholder="IV - Att. Spéciale">
    </div>
    <div class="autocomplete" style="width:16%;">
        <input id="iv5" type="text" placeholder="IV - Déf. Spéciale">
    </div>
    <div class="autocomplete" style="width:16%;">
        <input id="iv6" type="text" placeholder="IV - Vitesse">
    </div>
    <div id="abilities" class="createForm">
        <div>Choisissez les EVs</div>
        <div class="autocomplete" style="width:16%;">
            <input id="ev1" type="text" placeholder="EV - PV">
        </div>
        <div class="autocomplete" style="width:16%;">
            <input id="ev2" type="text" placeholder="EV - Attaque">
        </div>
        <div class="autocomplete" style="width:16%;">
            <input id="ev3" type="text" placeholder="EV - Défense">
        </div>
        <div class="autocomplete" style="width:16%;">
            <input id="ev4" type="text" placeholder="EV - Att. Spéciale">
        </div>
        <div class="autocomplete" style="width:16%;">
            <input id="ev5" type="text" placeholder="EV - Déf. Spéciale">
        </div>
        <div class="autocomplete" style="width:16%;">
            <input id="ev6" type="text" placeholder="EV - Vitesse">
        </div>
    </div>
    <div id="names" class="createForm">
        <button id="createSubmit">SOUMISSION</button>
    </div>
    <div id="createPokemonResults" class="createForm"></div>

    <script src="js/autoComplete.js"></script>
    <script src="js/create.js"></script>