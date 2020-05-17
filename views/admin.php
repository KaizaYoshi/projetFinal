<div id="presentation">Espace personnel de  <?=$_SESSION["name"] ?></div>
<?php require "views/headerAdmin.php";

require "models/readUsers.php";
$id = $_SESSION["id"];
echo "<input id='hiddenID' value='$id'>";
$message = readOneUsers($id);

while ($row=$message->fetch()): ?>
    <div id="presentation">Gestion de l'utilisateur <?=$row["name"] ?></div>
    <h3>Informations sur le message</h3>
    <div>Non de l'utilisateur: <?=$row["name"] ?></div>
    <div>Mail associé au compte: <?=$row["mail"]?></div>
    <div>Mot de passe : <input type=password value="<?=utf8_decode($row["password"]) ?>"></div>
    <div>Role actuel du membre : <?=$row["role"] ?></div>
    <div>État actuel du compte : <?=$row["etat"] ?></div>

    <h3>Interaction avec le topic</h3>
    <button id="updateMessage">Mettre à jour</button>
    <button id="deleteMessage"><a href="index.php?action=deleteMessage&id=<?=$id ?>">Supprimer le message</a></button>
    <div id="updateResults"></div>

    <script src="js/updateMessage.js"></script>

<?php endwhile; ?>
