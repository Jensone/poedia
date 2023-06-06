<?php

use App\Database;

require_once './Database/Database.php';

include_once './partials/_head.php';

$utilisateurs = Database::afficherTout('utilisateurs');



?>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">

    <?php include_once 'partials/_navigation.php'; ?>
</section>

<section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">
    <div class="container">
        <div class="row g-6 d-flex justify-content-center">
            <?php foreach ($utilisateurs as $utilisateur) { ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                        <button type="button" class="btn btn-lightess rounded-2 border-style-none p-3" data-bs-toggle="modal" data-bs-target="#utilisateur<?= $utilisateur['id'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5a55.4 55.4 0 0 1 7.24 27a56 56 0 0 1-56 56a55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z" />
                            </svg>
                        </button>
                        <div class="d-flex justify-content-center">
                            <img class="w-100" src="gradia-assets/images/teams/avatar-xl.png" alt="">
                        </div>
                        <div class="position-absolute bottom-0 start-0 p-3 w-100">
                            <div class="py-4 px-5 bg-white rounded-1">
                                <p class="text-muted mb-0">Nom: <?= $utilisateur['nom'] ?></p>
                                <p class="text-muted mb-0">Prénom: <?= $utilisateur['prenom'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php foreach ($utilisateurs as $utilisateur) : ?>

    <div class="modal fade" id="utilisateur<?= $utilisateur['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-center">
                        <img class="w-100" src="gradia-assets/images/teams/avatar-xl.png" alt="">
                    </div>
                    
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Nom : <?= $utilisateur['nom'] ?>
                        </li>
                        <li class="list-group-item">
                            Prénom : <?= $utilisateur['prenom'] ?>
                        </li>
                        <li class="list-group-item">
                            Email : <?= $utilisateur['email'] ?>
                        </li>
                        <li class="list-group-item">
                            Rôle : <?= $utilisateur['role'] ?>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-5" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include_once './partials/_footer.php'; ?>