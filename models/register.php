<?php
require "connect.php";

session_start();

$problems = array("Des problèmes ont été détéctés lors de votre inscription");
$results = array();

if (empty($_POST["name"])) {
    array_push($problems,"Un nom ou pseudo est requis pour l'inscription" );
} else {
    if (strlen($_POST["name"]) < 8){
        array_push($problems,"Le nom ou pseudo doit faire au moins 8 lettres" );
    }
}

if (empty($_POST["mail"])) {
    array_push($problems,"Un mail est requis pour l'inscription" );
} else {
    if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        array_push($problems,"Invalid email format" );
    }
}

if (empty($_POST["password"])) {
    array_push($problems,"Un mot de passe est requis pour l'inscription" );
} else {
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$_POST["password"])) {
        array_push($problems,"Invalid password format" );
    }
}


if (count($problems) > 1):
    echo json_encode($problems);
else:
    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('INSERT INTO `users` (name, mail, password, role, etat) VALUES(:name,:mail,:password, :role, :etat)');
    $req->execute(array(
        'name' => $_POST["name"],
        'mail' => $_POST["mail"],
        'password' => sha1($_POST["password"]),
        'role' => "Membre",
        'etat' => "OK"
    ));

    $bdd = connect("site_pokemon");
    $req = $bdd->prepare('SELECT * FROM users WHERE name=?');
    $req->execute(array($_POST["name"]));

    while ($row = $req->fetch()):
        $_SESSION['id'] = $row['ID'];
    endwhile;

    array_push($results,"Votre inscription est validée, vous allez être renvoyé sur la page d'accueil" );
    $_SESSION['name'] = $_POST["name"];
    echo json_encode($results);



endif;




