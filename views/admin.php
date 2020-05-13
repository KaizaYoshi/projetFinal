<div id="presentation">Espace personnel de  <?=$_SESSION["name"] ?></div>
<div id="adminMenu">
    <?php if($_SESSION["role"] == "Admin"): ?>
        <div class="admin">Informations personnelles</div>
        <div class="admin">|</div>
        <div class="admin"><a href="index.php?action=contentGestion">Gestion des contenus</a></div>
        <div class="admin">|</div>
        <div class="admin"><a href="index.php?action=userGestion">Gestion des utilsateurs</a></div>
    <?php else: ?>
        <div class="members">Informations personnelles</div>
        <div class="members">|</div>
        <div class="members"><a href="index.php?action=contentGestion">Gestion des contenus</a></div>
    <?php endif; ?>


</div>