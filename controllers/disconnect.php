<?php
session_start();
session_destroy();
echo "Vous venez de vous déconnecter, retour à la page d'accueil";
$disconnect = true;