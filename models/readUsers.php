<?php
require "connect.php";

function readUsers()
{
    $db = connect("site_pokemon");
    $req = $db->prepare("SELECT * FROM users WHERE 1");
    $req->execute();
    return $req;
}

function readOneUsers($para1)
{
    $db = connect("site_pokemon");
    $req = $db->prepare("SELECT * FROM users WHERE ID=$para1");
    $req->execute();
    return $req;
}