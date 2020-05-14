<?php
$id = $_GET["id"];
echo "<input id='hiddenID' value='$id'>";
?>


<h2>Voulez vous vraiment supprimer ce Pokémon ?</h2>
<div id="disconnect">
    <h3>Une fois l'action réalisée, le Pokemon concerné ne sera plus visible sur le site</h3>
    <ul>
        <li>Veillez à informer l'auteur de votre décision</li>
        <li>Cette action est définitive !</li>
    </ul>
</div>
<ul id="registerResults">
<button id="deleteSubmit">Supprimer le Pokémon</button>
<button><a href="index.php?action=admin">Revenir à l'espace personnel</a></button>

<script src="js/deletePokemon.js"></script>