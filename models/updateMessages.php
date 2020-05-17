<?php
require "connect.php";
$results = array();
$problems = array("Des problèmes ont été détectés :");

if (empty($_POST['message'])):
    array_push($problems, "Le champ 'nouveau message' ne doit pas être vide");
endif;


if (count($problems) > 1):
    echo json_encode($problems);
else:
    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('UPDATE `messages_topics` SET message_topic=:message WHERE ID_message=:ID');
    $req->execute(array(
        'message' => $_POST["message"],
        'ID' => $_POST["ID"],
    ));
    array_push($results, "Opposite of bad");
    echo json_encode($results);
endif;