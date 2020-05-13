<?php

session_start();
require "connect.php";

$results = array();
$date = time();

if (empty($_POST["message"])):
    array_push($results, "Votre message doit contenir du texte");
    echo json_encode($results);
else:
    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('INSERT INTO `messages_topics` (topic_ID, author_message, date_message, message_topic) 
VALUES(:id,:author, :date, :message)');
    $req->execute(array(
        'id' => $_POST["id"],
        'author' => $_SESSION["id"],
        'date' => $date,
        'message' => $_POST["message"]

    ));
    array_push($results, "Votre topic a bien été posté");
    echo json_encode($results);

endif;
