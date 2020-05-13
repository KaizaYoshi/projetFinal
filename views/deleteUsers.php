<?php
$id = $_GET["id"];
echo "<input id='hiddenID' value='$id'>";
?>


<h2>Voulez vous vraiment supprimer ce profil</h2>
<div id="disconnect">
    <h3>Une fois l'action réalisée, l'utilisateur concerné ne pourra plus se connecter sur le site </h3>
    <ul>
        <li>Veillez à informer l'utilisateur de votre décision</li>
        <li>Cette action est définitive !</li>
    </ul>
</div>
<button id="deleteSubmit">Supprimer le profil</button>
<button><a href="index.php?action=admin">Revenir à l'espace personnel</a></button>

<script src="js/deleteUsers.js"></script>