<?php require "controllers/readUserPokemon.php"; ?>

<div id="presentation">Liste des Pokémon de <?=$_SESSION["name"] ?></div>
<div class="listContainer">
    <?php
while ($row = $usersPokemon->fetch()): ?>
    <div class="mainController">
        <img src="<?= $row['lienPkm'] ?>" alt="IMAGE">
        <a href="index.php?action=display&id=<?=$row["ID"] ?>"><p class="listName"><?= $row["nom"] ?></p></a>
    </div>

<?php endwhile; ?>
</div>











