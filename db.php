<?php

function getBdd(): PDO
{
    $dbName = "autocompletion";
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $bdd = null;
    if ($bdd == NULL) {
        try {
            $bdd = new PDO("mysql:host=" . $dbHost . ";" . "dbname=" . $dbName, $dbUsername, $dbPassword, [
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
?>
            <h1 class='bg-danger text-center'>La connexion à échouée<h1>
                    <h3 class='bg-warning'>Le message d'erreur : <?php $e->getMessage()  ?> "</h3>"
    <?php
        }
    } // fin du if
    return $bdd;
}