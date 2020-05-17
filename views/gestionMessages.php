<?php
require "models/readMessages.php";
$id = $_GET["id"];
echo "<input id='hiddenID' value='$id'>";
$message = readOneMessages($id);

while ($row=$message->fetch()): ?>
    <div id="presentation">Gestion d'un message</div>
    <h3>Informations sur le message</h3>
    <div>ID interne du message: <?=$id?></div>
    <div>Non du topic container: <?=$row["topic_name"]?></div>
    <div>Contenu du message : <?=$row["message_topic"]?></div>
    <div>Date de création : <?=date("d/m/Y - H:i:s",$row["date_message"])?></div>
    <div>Auteur : <?=$row["name"]?></div>

    <h3>Interaction avec le topic</h3>

    <div class="formBlock">
        <i class="fa fa-key icon"></i><label for="newMessage">Écrivez votre nouveau message</label>
        <textarea class="input-field" id="newMessage"><?=$row["message_topic"]?></textarea>
    </div>
    <button id="updateMessage">Mettre à jour</button>
    <button id="deleteMessage"><a href="index.php?action=deleteMessage&id=<?=$id ?>">Supprimer le message</a></button>
    <div id="updateResults"></div>

    <script src="js/updateMessage.js"></script>

<?php endwhile; ?>