<?php
echo $_SESSION['id'];
if (isset($_SESSION['name'])): ?>
    <div id="presentation">Bienvenue sur notre site, <?= $_SESSION['name']?>. Vous pouvez découvrir et regarder nos différents
        contenus
    </div>
<?php else: ?>
    <div id="presentation">Bienvenue sur notre site, visiteur. Vous pouvez découvrir et regarder nos différents
        contenus
    </div>
<?php endif;

require "controllers/readPokemon.php"; ?>

<div id="presentation">Les 15 derniers Pokémon de la communanuté</div>
<div class="listContainer">
    <?php
    while ($row = $list->fetch()): ?>
        <div class="mainController">
            <img src="<?= $row['lienPkm'] ?>" alt="IMAGE">
            <a href="index.php?action=display&id=<?=$row["ID"] ?>"><p class="listName"><?= $row["nom"] ?></p></a>
        </div>

    <?php endwhile; ?>
</div>




