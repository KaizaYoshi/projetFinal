<?php
session_start();
require "connect.php";
$results = array();
$problems = array("Des problèmes ont été détectés :");

if ($_POST['name'] == 0):
    array_push($problems, "Le champ 'nom' est obligatoire");
endif;

if ($_POST['ability'] == 0):
    array_push($problems, "Le champ 'talent' est obligatoire");
endif;

if ($_POST['move1'] == 0):
    array_push($problems, "Le champ 'attaque 1' est obligatoire");
endif;

if ($_POST['nature'] == 0):
    array_push($problems, "Le champ 'nature' est obligatoire");
endif;

if ($_POST['ball'] == 0):
    array_push($problems, "Le champ 'ball est obligatoire");
endif;

if (empty($_POST['iv1'])):
    $iv1 = 0;
elseif ($_POST['iv1'] > 31 || $_POST['iv1'] < 0):
    array_push($problems, "IV PV : Doit être compris entre 0 et 31");
endif;

if (empty($_POST['iv2'])):
    $iv2 = 0;
elseif ($_POST['iv2'] > 31 || $_POST['iv2'] < 0):
    array_push($problems, "IV Att. : Doit être compris entre 0 et 31");
endif;

if (empty($_POST['iv3'])):
    $iv3 = 0;
elseif ($_POST['iv3'] > 31 || $_POST['iv3'] < 0):
    array_push($problems, "IV Déf. : Doit être compris entre 0 et 31");
endif;

if (empty($_POST['iv4'])):
    $iv4 = 0;
elseif ($_POST['iv4'] > 31 || $_POST['iv4'] < 0):
    array_push($problems, "IV Att. Spé. : Doit être compris entre 0 et 31");
endif;

if (empty($_POST['iv5'])):
    $iv5 = 0;
elseif ($_POST['iv5'] > 31 || $_POST['iv5'] < 0):
    array_push($problems, "IV Déf. Spé. : Doit être compris entre 0 et 31");
endif;

if (empty($_POST['iv6'])):
    $iv6 = 0;
elseif ($_POST['iv6'] > 31 || $_POST['iv6'] < 0):
    array_push($problems, "IV Vit. : Doit être compris entre 0 et 31");
endif;

if (empty($_POST['ev1'])):
    $_POST['ev1'] = 0;
elseif ($_POST['ev1'] > 252 || $_POST['ev1'] < 0):
    array_push($problems, "EV PV : Doit être compris entre 0 et 252");
endif;

if (empty($_POST['ev2'])):
    $_POST['ev2'] = 0;
elseif ($_POST['ev2'] > 252 || $_POST['ev2'] < 0):
    array_push($problems, "EV Att. : Doit être compris entre 0 et 252");
endif;

if (empty($_POST['ev3'])):
    $_POST['ev3'] = 0;
elseif ($_POST['ev3'] > 252 || $_POST['ev3'] < 0):
    array_push($problems, "EV Déf. : Doit être compris entre 0 et 252");
endif;

if (empty($_POST['ev4'])):
    $_POST['ev4'] = 0;
elseif ($_POST['ev4'] > 252 || $_POST['ev4'] < 0):
    array_push($problems, "EV Att. Spé. : Doit être compris entre 0 et 252");
endif;

if (empty($_POST['ev5'])):
    $_POST['ev5'] = 0;
elseif ($_POST['ev5'] > 252 || $_POST['ev5'] < 0):
    array_push($problems, "EV Déf. Spé. : Doit être compris entre 0 et 252");
endif;

if (empty($_POST['ev6'])):
    $_POST['ev6'] = 0;
elseif ($_POST['ev6'] > 252 || $_POST['ev6'] < 0):
    array_push($problems, "EV Vit. : Doit être compris entre 0 et 252");
endif;

$sommeEV = $_POST['ev1'] + $_POST['ev2'] + $_POST['ev3'] + $_POST['ev4'] + $_POST['ev5'] + $_POST['ev6'];
if ($sommeEV > 510):
    array_push($problems, "La somme des EVs doit être inférieure ou égale à 510");
endif;

if (count($problems) > 1):
    echo json_encode($problems);
else:
    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('UPDATE `pokemon_users` SET name_ID=:name, ability_ID=:ability, move1_ID=:move1, move2_ID=:move2,
move3_ID=:move3, move4_ID=:move4, nature_ID=:nature, item_ID=:item, ball_ID=:ball, iv1=:iv1, iv2=:iv2, iv3=:iv3, iv4=:iv4,
 iv5=:iv5, iv6=:iv6, ev1=:ev1, ev2=:ev2, ev3=:ev3, ev4=:ev4, ev5=:ev5, ev6=:ev6 WHERE ID_pokemonUser=:ID');
    $req->execute(array(
        'name' => $_POST["name"],
        'ability' => $_POST["ability"],
        'move1' => $_POST["move1"],
        'move2' => $_POST["move2"],
        'move3' => $_POST["move3"],
        'move4' => $_POST["move4"],
        'nature' => $_POST["nature"],
        'item' => $_POST["item"],
        'ball' => $_POST["ball"],
        'iv1' => $_POST["iv1"],
        'iv2' => $_POST["iv2"],
        'iv3' => $_POST["iv3"],
        'iv4' => $_POST["iv4"],
        'iv5' => $_POST["iv5"],
        'iv6' => $_POST["iv6"],
        'ev1' => $_POST["ev1"],
        'ev2' => $_POST["ev2"],
        'ev3' => $_POST["ev3"],
        'ev4' => $_POST["ev4"],
        'ev5' => $_POST["ev5"],
        'ev6' => $_POST["ev6"],
        'ID' => $_POST["ID"],
    ));
    array_push($results, "Opposite of bad");
    echo json_encode($results);
endif;