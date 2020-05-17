<?php
require "connect.php";

$db = connect("site_pokemon");
$req = $db->prepare("DELETE FROM topics_forum WHERE ID_topic=:ID");
$req->execute(array(
    'ID' => $_POST["ID"]
));

echo json_encode("La suppression de ce topic a réussi, retour à l'accueil Topic");


