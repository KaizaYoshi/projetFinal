<?php
session_start();
session_destroy();
echo json_encode( "Vous venez de vous déconnecter, retour à la page d'accueil");
$disconnect = true;