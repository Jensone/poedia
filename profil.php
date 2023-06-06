<?php

use App\Database;

require_once './Database/Database.php';

include_once './partials/_head.php';

$utilisateurs = Database::afficherTout('utilisateurs');



?>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">
    <div class="container">
        <div class="row g-6 d-flex justify-content-center">
            <?php foreach($utilisateurs as $utilisateur) { ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                        <div class="d-flex justify-content-center">
                            <img class="w-100" src="gradia-assets/images/teams/avatar-xl.png" alt="">
                        </div>
                        <div class="position-absolute bottom-0 start-0 p-3 w-100">
                            <div class="py-4 px-5 bg-white rounded-1">
                                <p class="text-muted mb-0">Nom: <?= $utilisateur['nom'] ?></p>
                                <p class="text-muted mb-0">Prénom: <?= $utilisateur['prenom'] ?></p>
                                <p class="text-muted mb-0"> Mail: <?= $utilisateur['email'] ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include_once './partials/_footer.php'; ?>