<?php

function connect($para1){
    /*PDO : Initialize the connexion to database*/
    try {
        return new PDO('mysql:host=localhost;dbname='.$para1.';charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}