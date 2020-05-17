<?php
$id = $_GET["id"];
echo "<input id='hiddenID' value='$id'>";
?>


<h2>Voulez vous vraiment supprimer ce Topic ?</h2>
<div id="disconnect">
    <h3>Une fois l'action réalisée, le Topic concerné ne sera plus visible sur le site</h3>
    <ul>
        <li>Veillez à informer l'auteur de votre décision</li>
        <li>Cette action est définitive !</li>
    </ul>
</div>

<button id="deleteSubmit">Supprimer le Topic</button>
<button><a href="index.php?action=topicsList">Revenir à l'accueil Topics</a></button>

<div id="registerResults"></div>

<script src="js/deleteTopic.js"></script>