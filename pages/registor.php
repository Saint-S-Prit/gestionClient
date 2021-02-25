<?php
if (isset($_POST['submit'])) {

    include '../src/registor.model.php';


    if (isset($insertAnnonce)) {
?>
        <script>
            swal("Good job!", "You clicked the button!", "success", {
                button: "Aww yiss!",
            });
        </script>
<?php
    }
}
?>
<div class="formulaire">

    <?php
    if (isset($error)) {
        echo $error;
    }
    ?>
    <div class="card">
        <h5 class="card-header text-center">Nouveau client</h5>
        <div class="card-body">
            <form method="post">


                <div class="form-group">
                    <label>Prénom</label>
                    <input class="form-control" data-error="You must have a name." id="inputName" placeholder="Name" type="text" name="prenom" />

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control item" type="text" id="inputUsername" placeholder="Username" name="nom">

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label>Date de naissance</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="votra date de naissance" name="dateNaissance">

                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>


                <div class="form-group">
                    <label>Adresse</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputPassword" placeholder="adresse" name="adresse" />

                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Téléphone</label>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="telephone" name="telephone" />
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Genre</label>
                    <select name="sexe" class="form-control">
                        <option>select</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                </div>




                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>