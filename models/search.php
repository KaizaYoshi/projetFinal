<?php
require "connect.php";

if ($_POST["ID"] == 0):
    echo json_encode("Le champ de recherche est vide ou le Pokémon n'existe pas");
else:
    $db = connect("site_pokemon");
    $req = $db->prepare("SELECT ID_pokemonuser, name, pokemon_name AS pkmName, image, ID_pokemon FROM pokemon_users 
AS pkmUser INNER JOIN users ON pkmUser.ID_user = users.ID INNER JOIN pokemon AS pkm ON pkmUser.name_ID = pkm.ID_pokemon
INNER JOIN talents ON pkmUser.ability_ID = talents.ID_talent INNER JOIN natures ON pkmUser.nature_ID = natures.ID_nature
INNER JOIN items ON pkmUser.item_ID = items.ID_item INNER JOIN balls ON pkmUser.ball_ID = balls.ID_balls WHERE ID_pokemon=:ID");
    $req->execute(array(
        'ID' => $_POST["ID"]
    ));

    $results = array();
    while ($row = $req->fetch()):
        array_push($results, $row['ID_pokemonuser']);
        array_push($results, $row['pkmName']);
        array_push($results, $row['name']);

    endwhile;
    echo json_encode($results);
endif;





