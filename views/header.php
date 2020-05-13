<?php session_start() ?>

<header>
    <a href="index.php"><h1>LOGO SITE</h1></a>

</header>
<div id="menu">
    <?php
    if (isset($_SESSION['name'])): ?>
        <div class="menu"><a href="index.php?action=create">Création</a></div>
        <div class="menu"><a href="index.php?action=userlist">Votre liste</a></div>
        <div class="menu"><a href="index.php?action=admin">Espace personnel</a></div>
        <div class="menu"><a href="index.php?action=forum">Forum</a></div>
        <div class="menu"><a href="index.php?action=disconnect">Déconnexion</a></div>
    <?php else: ?>
        <div class="menuVisitor">Explorer</div>
        <div class="menuVisitor"><a href="index.php?action=forum">Forum</a></div>
        <div class="menuVisitor"><a href="index.php?action=login">Connexion & Inscription</a></div>
    <?php endif;
    ?>

</div>