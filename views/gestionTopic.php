<?php
require "models/readTopics.php";
$id = $_GET["id"];
echo "<input id='hiddenID' value='$id'>";
$topic = readUserTopics($id);
require "views/headerAdmin.php";

while ($row=$topic->fetch()): ?>
    <div id="presentation">Gestion du topic : <?=$row["topic_name"]?></div>
    <h3>Informations sur le topic</h3>
    <div>Non actuel du topic : <?=$row["topic_name"]?></div>
    <div>Date de création : <?=date("d/m/Y - H:i:s",$row["date_topic"])?></div>
    <div>Auteur : <?=$row["name"]?></div>

    <h3>Interaction avec le topic</h3>


    <div class="formBlock">
        <i class="fa fa-key icon"></i><label for="newTitle">Choisissez un nouveau titre</label>
        <input class="input-field" id="newTitle">
    </div>
    <button id="updateTopic">Mettre à jour</button>
    <button id="deleteTopic"><a href="index.php?action=deleteTopic&id=<?=$id ?>">Supprimer le topic</a></button>
    <div id="updateResults"></div>

    <script src="js/updateTopic.js"></script>

<?php endwhile; ?>



