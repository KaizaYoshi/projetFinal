<?php
require "controllers/readUsers.php";
?>

<div id="presentation">Administrateur - Gestion des utilisateurs</div>

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
        <th class="tg-jxzy">Nom &amp; Mail<br></th>
        <th class="tg-jxzy">Rôle</th>
        <th class="tg-jxzy">État</th>
        <th class="tg-jxzy">MàJ Profil<br></th>
        <th class="tg-jxzy">Suppression</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $users->fetch()): ?>
        <tr>
            <td class="tg-rbwf"><?= $row["ID"] ?></td>
            <td class="tg-rbwf"><?= $row["name"] ?></td>
            <td class="tg-rbwf"><?= $row["role"] ?></td>
            <td class="tg-rbwf"><?= $row["etat"] ?></td>
            <td class="tg-rbwf"><a href="index.php?action=updateUser&id=<?= $row["ID"] ?>">Mettre à jour</a></td>
            <td class="tg-rbwf"><a href="index.php?action=deleteUser&id=<?= $row["ID"] ?>">Supprimer</a></td>
        </tr>
    <?php endwhile;
    ?>


    </tbody>
</table>


