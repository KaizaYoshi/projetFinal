<?php
require "models/listPokemonUser.php";
$id = $_SESSION["id"];
$pokemon = readPkmUser($id);

?>
<div id="presentation">Liste des Pokémon de <?=$_SESSION["name"] ?></div>
<div class="listContainer">
    <?php
    while ($row = $pokemon->fetch()): ?>
        <div class="mainController">
            <img src="<?= $row['lienPkm'] ?>" alt="IMAGE">
            <a href="index.php?action=display&id=<?=$row["ID"] ?>"><p class="listName"><?= $row["nom"] ?></p></a>
        </div>

    <?php endwhile; ?>
</div>



