<?php
$id = $_SESSION["id"];

if ($_SESSION["role"] == "membre"):
    require "models/listPokemonUser.php";
    $id = $_SESSION["id"];
    $list = readPkmUser($id);
else:
    require "controllers/readPokemon.php";
endif;

?>
<table class="tg" style="undefined;table-layout: fixed; width: 80%">
    <colgroup>
        <col style="width: 5%">
        <col style="width: 30%">
        <col style="width: 16%">
        <col style="width: 16%">
        <col style="width: 16%">
        <col style="width: 16%">
    </colgroup>
    <thead>
    <tr>
        <th class="tg-vrz8">ID<br></th>
        <th class="tg-jxzy">Auteur<br></th>
        <th class="tg-jxzy">Nom</th>
        <th class="tg-jxzy">MàJ Pokémon<br></th>
        <th class="tg-jxzy">Suppression</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $list->fetch()): ?>
        <tr>
            <td class="tg-rbwf"><?= $row["ID"] ?></td>
            <td class="tg-rbwf"><?= $row["user"] ?></td>
            <td class="tg-rbwf"><?= $row["nom"] ?></td>
            <td class="tg-rbwf"><a href="index.php?action=updatePokemon&id=<?= $row["ID"] ?>">Mettre à jour</a></td>
            <td class="tg-rbwf"><a href="index.php?action=deletePokemon&id=<?= $row["ID"] ?>">Supprimer</a></td>
        </tr>
    <?php endwhile;
    ?>
