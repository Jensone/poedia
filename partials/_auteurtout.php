<section class="pt-28 pb-36 bg-secondary overflow-hidden">
    <div class="container">
        <div class="text-center mb-20">
            <p class="d-inline-block fs-20 fw-semibold text-white text-uppercase mb-6" style="letter-spacing: 1px; background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">The team that made us successful</p>
            <h2 class="fs-10 fw-semibold text-white mb-5">les auteurs</h2>
        </div>
        <div class="container">
            <div class="row g-6">
                <?php foreach ($auteurs as $auteur) { ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                            <div class="d-flex justify-content-center">
                                <img class="w-100" src="gradia-assets/images/teams/avatar-xl.png" alt="">
                            </div>
                            <div class="position-absolute bottom-0 start-0 p-3 w-100">
                                <div class="py-4 px-5 bg-white rounded-1">
                                    <h3 class="fs-17 mb-1"><?= $auteur['nom'] ?> <?= $auteur['prenom'] ?></h3>
                                    <p class="text-muted mb-0">Origine: <?= $auteur['nationalite'] ?></p>
                                    <p class="text-muted mb-0"> Année: <?= $auteur['dateNaissance'] ?></p>
                                    <a href="http:auteur.php?detaille=<?= $auteur['id'] ?>" class="fs-15 fw-semibold bg-color text-black mb-8">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
        <!-- Button trigger modal -->
        <a href="auteur.php?add" class="btn btn-primary mt-5" data-bs-target="#exampleModal">
            Ajouter auteur
        </a>
    </div>
    </div>
</section>