<?php
include 'connexion.model.php';
$select = $bdd->prepare('SELECT * FROM clients ORDER BY id ASC');
$select->execute();
$resultats = $select->fetchAll(PDO::FETCH_OBJ);
