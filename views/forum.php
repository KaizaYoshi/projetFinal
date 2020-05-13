<?php require "controllers/readTopics.php";

echo $_SESSION['id'];
while ($row = $topics->fetch()): ?>
    <h3><a href="index.php?action=topic&id=<?=$row["ID_topic"]?>"><?=$row["topic_name"]?></a><br> par <?=$row["name"]?>
        le <?=date("d/m/Y - H:i:s",$row["date_topic"])?></h3><br>
<?php endwhile;

if (isset($_SESSION['name'])): ?>
    <div class="form">
        <h2>Formulaire d'inscription</h2>
        <div class="formBlock">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Nom du topic" id="topicName">
        </div>

        <div class="formBlock">
            <i class="fa fa-envelope icon"></i>
            <textarea class="input-field" type="text" placeholder="Message" id="topicMessage"></textarea>
        </div>

        <button class="btn" id="topicSubmit">Créer un topic</button>
        <h3 id="topicResults"></h3>
    </div>
<?php else: ?>
    <div id="presentation">Vous devez être connecté pour pouvoir créer un topic</div>
<?php endif;
?>

<script src="js/createTopic.js"></script>