<?php
require "../controllers/connectUsers.php";
session_start();


$problems = array("Des problèmes ont été détéctés lors de votre connexion");
$results = array();



if (empty($_POST["name"]) || empty($_POST["password"])):
    array_push($problems,"Un des champs requis est vide" );
else:
    while ($row = $users->fetch()):
        if($_POST["name"] == $row["name"] && sha1($_POST["password"]) == $row["password"]):
            $_SESSION['name'] = $_POST['name'];
            //$_SESSION['password'] = $_POST['password'];
            $_SESSION['id'] = $row['ID'];
            $_SESSION['role'] = $row["role"];
        else:
            echo "";
        endif;
    endwhile;

endif;

if(isset($_SESSION['name']) && isset($_SESSION['id'])):
    array_push($results,"Votre inscription est validée, vous allez être renvoyé sur la page d'accueil" );
    echo json_encode($results);
elseif(count($problems) < 2):
    array_push($problems,"Utilisateur inconnu ou identifiants éronnées" );
    echo json_encode($problems);
else:
    echo json_encode($problems);
endif;



