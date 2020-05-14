<?php
require "connect.php";

$db = connect("site_pokemon");
$req = $db->prepare("DELETE FROM pokemon_users WHERE ID_pokemonUser=:ID");
$req->execute(array(
    'ID' => $_POST["ID"]
));

echo json_encode("La suppression de ce Pokémon a réussi, retour à l'accueil Admin");


