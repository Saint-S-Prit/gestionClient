<?php
include '../src/liste.model.php';


//var_dump($resultats);
?>
<div class="container">

    <h1 style="text-align:center;color:blue;">
        les clients
    </h1>

    <!-- Bootstrap table class -->
    <table class="table" style="width:60%; margin:0 auto">
        <thead>
            <tr>
                <th scope="col">num</td>
                <th scope="col">Prenom</td>
                <th scope="col">Nom</td>
                <th scope="col">Date de Naissance</td>
                <th scope="col">Sexe</td>
                <th scope="col">Adresse</td>
                <th scope="col">Telephone</td>

            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($resultats as $value) {
                # code...
            ?>
                <tr>
                    <th scope="row"><?= $value->id ?></th>
                    <td><?= $value->prenom ?></td>
                    <td><?= $value->nom ?></td>
                    <td><?= $value->dateNaissance ?></td>
                    <td><?= $value->sexe ?></td>
                    <td><?= $value->adresse ?></td>
                    <td><?= $value->telephone ?></td>
                </tr>
            <?php

            }
            ?>
        </tbody>
    </table>
</div>