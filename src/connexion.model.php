<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=systemeGestioClient', 'root', '');

    $bdd->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e;
}
