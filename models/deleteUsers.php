<?php
require "connect.php";

$db = connect("site_pokemon");
$req = $db->prepare("DELETE FROM users WHERE ID=:ID");
$req->execute(array(
    'ID' => $_POST["ID"]
));

echo json_encode("La suppression de ce profil a réussi, retour à l'accueil Admin");


