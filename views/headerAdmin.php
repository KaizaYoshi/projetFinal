<div id="adminMenu">
    <?php if($_SESSION["role"] == "Admin"): ?>
        <div class="admin">Informations personnelles</div>
        <div class="bar">|</div>
        <div class="admin"><a href="index.php?action=contentGestion">Gestion des Pokémon</a></div>
        <div class="bar">|</div>
        <div class="admin"><a href="index.php?action=topicsList">Gestion des topics</a></div>
        <div class="bar">|</div>
        <div class="admin"><a href="index.php?action=userGestion">Gestion des utilsateurs</a></div>
    <?php else: ?>
        <div class="members">Informations personnelles</div>
        <div class="bar">|</div>
        <div class="members"><a href="index.php?action=contentGestion">Gestion des Pokémon</a></div>
        <div class="bar">|</div>
        <div class="members"><a href="index.php?action=topicsList">Gestion des topics</a></div>
    <?php endif; ?>
</div>