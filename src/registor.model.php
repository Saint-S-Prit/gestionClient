<?php
$prenom = htmlspecialchars(addslashes($_POST['prenom']));
$nom = htmlspecialchars(addslashes($_POST['nom']));
$sexe = htmlspecialchars(addslashes($_POST['sexe']));
$telephone = htmlspecialchars(addslashes($_POST['telephone']));
$dateNaissance = htmlspecialchars(addslashes($_POST['dateNaissance']));
$adresse = htmlspecialchars(addslashes($_POST['adresse']));

if (!empty($prenom) && !empty($nom) && !empty($sexe) && !empty($telephone) && !empty($dateNaissance) && !empty($adresse)) {

    include 'connexion.model.php';

    $insertAnnonce = $bdd->prepare('INSERT INTO clients (prenom, nom, sexe, adresse, telephone,dateNaissance) VALUES (?,?,?,?,?,?)');
    $insertAnnonce->execute([$prenom, $nom, $sexe, $adresse, $telephone, $dateNaissance]);


    $error = "le chargement a été effectué";
} else {
    $error = "Veuiller remplir tous les champs";
}
