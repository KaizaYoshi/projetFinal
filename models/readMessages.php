<?php
require  "connect.php";

function readMessages($para1){
    $db = connect("site_pokemon");
    $req = $db->prepare("SELECT * FROM `messages_topics` LEFT JOIN `topics_forum` ON (messages_topics.topic_ID = topics_forum.ID_topic) 
LEFT JOIN `users` ON (messages_topics.author_message = users.ID) WHERE topic_ID=$para1");
    $req->execute();
    return $req;
}