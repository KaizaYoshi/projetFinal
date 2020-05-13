<?php
require "models/connect.php";

function displayPkmUser($para1)
{
    $db = connect("site_pokemon");
    $req = $db->prepare("SELECT ID_pokemonUser, name AS user, pokemon_name AS nom, image AS lienPkm, type1, type2, 
nom_talent AS talent,move1_ID AS att1, move2_ID AS att2, move3_ID AS att3, move4_ID AS att4, name_nature AS nature, name_item 
AS objet, images_item AS lienItem, nom_balls AS ball, images_balls AS lienBall, iv1, iv2, iv3, iv4, iv5, iv6, ev1, ev2, 
ev3, ev4, ev5, ev6 FROM pokemon_users AS pkmUser INNER JOIN users ON pkmUser.ID_user = users.ID INNER JOIN pokemon AS pkm 
ON pkmUser.name_ID = pkm.ID_pokemon INNER JOIN talents ON pkmUser.ability_ID = talents.ID_talent INNER JOIN natures 
ON pkmUser.nature_ID = natures.ID_nature INNER JOIN items ON pkmUser.item_ID = items.ID_item INNER JOIN balls 
ON pkmUser.ball_ID = balls.ID_balls WHERE ID_pokemonUser=$para1");
    $req->execute();
    return $req;
}