<?php

use App\Database;

include_once './partials/_head.php';

require_once './partials/_connectUser.php';

?>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">

    <?php include_once 'partials/_navigation.php'; ?>

</section>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">

    <form  action="<?php $path ?>./poedia/profil.php" method="post">
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" value="<?php $utilisateurs['nom'] ?>" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">prénom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" value="<?php $utilisateurs['prenom'] ?>" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php $utilisateurs['email'] ?>" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" name="motdepasse" class="form-control" value="<?php $utilisateurs['motdepasse'] ?>" id="exampleInputPassword1">
        </div>
        <button type="submit" name="connect" class="btn btn-primary">Se Connecter</button>
    </form>

</section>

<?php include_once './partials/_footer.php'; ?>