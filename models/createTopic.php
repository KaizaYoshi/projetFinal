<?php
require "../controllers/readLastTopic.php";
session_start();

$results = array();
$date = time();
$idAuthor = $_SESSION["id"];

if(empty($_POST["name"]) || empty($_POST["message"])):
    array_push($results, "Votre topic doit possèder un titre");
    echo json_encode($results);
else:
    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('INSERT INTO `topics_forum` (topic_name, topic_author, date_topic) VALUES(:name,:author, :date)');
    $req->execute(array(
        'name' => $_POST["name"],
        'author' => $idAuthor,
        'date' => $date,

    ));

    while($row = $lastTopic->fetch()):
        $id = $row["ID_topic"];
    endwhile;

    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('INSERT INTO `messages_topics` (topic_ID, author_message, date_message, message_topic) 
VALUES(:ID,:authorMessage, :dateMessage, :message)');
    $req->execute(array(
        'ID' => $id + 1,
        'authorMessage' => $idAuthor,
        'dateMessage' => $date,
        'message' => $_POST['message']

    ));

    array_push($results,"Votre topic a bien été posté" );
    echo json_encode($results);

endif;

