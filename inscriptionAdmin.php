<?php

use App\Database;

include_once './partials/_head.php';

require_once './partials/_connectUser.php';

?>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">

    <?php include_once 'partials/_navigation.php'; ?>

</section>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">

    <form action="<?php $path ?>./config/forms.php" method="post">
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">prénom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail3" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" name="motdepasse" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Vérification du mot de passe</label>
            <input type="password" name="motdepasse" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail4" class="form-label">Admin</label>
            <input type="text" name="role" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" hidden>
        </div>
        <button type="submit" name="addUser" class="btn btn-primary" value="inscription">S'inscrire</button>
    </form>

</section>

<?php include_once './partials/_footer.php'; ?>