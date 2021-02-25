<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include 'connexion.model.php';
    $select = $bdd->prepare('DELETE FROM clients WHERE id = ?');
    $select->execute([$id]);
    header('Location:../pages/admin.php?action=delete');
}
