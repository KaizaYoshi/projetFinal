<?php
require "connect.php";
$results = array();
$problems = array("Des problèmes ont été détectés :");

if (empty($_POST['name'])):
    array_push($problems, "Le champ 'nouveau nom' ne doit pas être vide");
endif;


if (count($problems) > 1):
    echo json_encode($problems);
else:
    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('UPDATE `topics_forum` SET topic_name=:name WHERE ID_topic=:ID');
    $req->execute(array(
        'name' => $_POST["name"],
        'ID' => $_POST["ID"],
    ));
    array_push($results, "Opposite of bad");
    echo json_encode($results);
endif;