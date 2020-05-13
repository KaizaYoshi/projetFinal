<?php
require  "connect.php";

function readLastTopic(){
    $db = connect("site_pokemon");
    $req = $db->prepare("SELECT * FROM `topics_forum` ORDER BY date_topic DESC LIMIT 1");
    $req->execute();
    return $req;
}