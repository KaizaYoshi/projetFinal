<?php require "models/readMessages.php";

$id = $_GET["id"];
$topics = readMessages($id);
echo "<input id='hiddenID' value='$id'>";

while ($row = $topics->fetch()):
    echo $row["name"] . " le " . date("d/m/Y - H:i:s", $row["date_message"]) . "<br>";
    echo $row["message_topic"];
endwhile;

if (isset($_SESSION['name'])): ?>
    <div class="form">
        <div id="presentation">Poster un message</div>
        <div class="formBlock">
            <i class="fa fa-user icon"></i>
            <textarea class="input-field" type="text" placeholder="Votre message" id="messageTopic"></textarea>

        </div>

        <button class="btn" id="messageSubmit">Envoyer le message</button>
        <h3 id="messageResults"></h3>
    </div>
<?php else: ?>
    <div id="presentation">Vous devez être connecté pour pouvoir poster des messages</div>
<?php endif;
?>

<script src="js/createMessage.js"></script>

