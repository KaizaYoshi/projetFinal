<?php

$id = $_SESSION["id"];

if ($_SESSION["role"] == "Membre"):
    require "models/readTopics.php";
    $id = $_SESSION["id"];
    $topics = readUserTopics($id);
else:
    require "controllers/readTopics.php";
endif;

?>

<?php require "views/headerAdmin.php" ?>

<div id="presentation">Gestion des Topics</div>

<table class="tg" style="undefined;table-layout: fixed; width: 80%">
    <colgroup>
        <col style="width: 5%">
        <col style="width: 31%">
        <col style="width: 31%">
        <col style="width: 31%">
    </colgroup>
    <thead>
    <tr>
        <th class="tg-vrz8">ID</th>
        <th class="tg-jxzy">Nom Topic</th>
        <th class="tg-jxzy">Auteur</th>
        <th class="tg-jxzy">Gestion</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $topics->fetch()): ?>
        <tr>
            <td class="tg-rbwf"><?= $row["ID_topic"] ?></td>
            <td class="tg-rbwf"><a href="index.php?action=topic&id=<?= $row["ID_topic"] ?>"><?= $row["topic_name"] ?></a></td>
            <td class="tg-rbwf"><?= $row["name"] ?></td>
            <td class="tg-rbwf"><a href="index.php?action=gestionTopic&id=<?= $row["ID_topic"] ?>">Gestion</a></td>
        </tr>
    <?php endwhile;
    ?>
