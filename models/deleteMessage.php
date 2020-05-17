<?php
require "connect.php";

$db = connect("site_pokemon");
$req = $db->prepare("DELETE FROM messages_topics WHERE ID_message=:ID");
$req->execute(array(
    'ID' => $_POST["ID"]
));

echo json_encode("La suppression de ce message a réussi, retour à l'accueil Topics");

