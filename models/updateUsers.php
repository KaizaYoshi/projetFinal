<?php
require "connect.php";

session_start();

$problems = array("Des problèmes ont été détéctés lors de votre inscription");
$results = array();

if (empty($_POST["name"])) {
    array_push($problems,"Veuillez repréciser votre nom" );
} else {
    if (strlen($_POST["name"]) < 8){
        array_push($problems,"Le nom ou pseudo doit faire au moins 8 lettres" );
    }
}

if (empty($_POST["mail"])) {
    array_push($problems,"Veuillez repréciser votre mail" );
} else {
    if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        array_push($problems,"Le format du mail est incorrect" );
    }
}

if (empty($_POST["password"])) {
    array_push($problems,"Veuillez repréciser votre mot de passe" );
} else {
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$_POST["password"])) {
        array_push($problems,"Le format du mot de passe est incorrect");
    }
}

if (empty($_POST["role"])) {
    array_push($problems,"Veuillez précisez le rôle de ce membre" );
}

if (empty($_POST["etat"])) {
    array_push($problems,"Veuillez précisez l'état de ce membre" );
}

if (count($problems) > 1):
    echo json_encode($problems);
else:
    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('UPDATE `users` SET name= :name, mail= :mail, password= :password, role= :role, etat= :etat WHERE ID=:ID');
    $req->execute(array(
        'name' => $_POST["name"],
        'mail' => $_POST["mail"],
        'password' => sha1($_POST["password"]),
        'role' => $_POST["role"],
        'etat' => $_POST["etat"],
        'ID' => $_POST["ID"]
    ));
    array_push($results,"La mise à jour est terminée, retour à la page précédente");
    if ($_SESSION["id"] == $_POST["ID"]){
        $_SESSION['name'] = $_POST["name"];
    }
    echo json_encode($results);

endif;
