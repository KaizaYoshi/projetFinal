<?php
require  "connect.php";

function readTopics(){
    $db = connect("site_pokemon");
    $req = $db->prepare("SELECT * FROM `topics_forum` LEFT JOIN `users` ON (topics_forum.topic_author = users.ID) ORDER BY date_topic DESC");
    $req->execute();
    return $req;
}

function readUserTopics($para1){
    $db = connect("site_pokemon");
    $req = $db->prepare("SELECT * FROM `topics_forum` LEFT JOIN `users` ON (topics_forum.topic_author = users.ID) WHERE ID_topic=$para1 ORDER BY date_topic DESC ");
    $req->execute();
    return $req;
}