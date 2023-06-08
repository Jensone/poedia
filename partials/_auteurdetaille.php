<section class="pt-28 pb-36 bg-secondary overflow-hidden">
    <div class="container">
        <div class="text-center mb-20">
            <h1 class="fs-10 fw-semibold text-white mb-5" style="letter-spacing: 1px; background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Auteur : <?= $auteur['nom'] ?> <?= $auteur['prenom'] ?></h1>
        </div>
        <div class="container ml-15">
            <div class="row g-12">

                <div class="  ">
                    <div class="auteur_dta d-flex ">
                        <div class="d-flex justify-content-center">
                            <img class="w-100" src="gradia-assets/images/teams/avatar-xl.png" alt="">
                        </div>
                        <div class=" bottom-0 start-0 py-2 w-50">
                            <div class="py-4 px-5 bg-white rounded-1">
                                <div>
                                    <h3 class="fs-17 mb-1"><?= $auteur['nom'] ?> <?= $auteur['prenom'] ?></h3>
                                    <p class="text-muted mb-0">Nombre de livre: <?= count($livreauts) ?></p>
                                    <p class="text-muted mb-0">Origine: <?= $auteur['nationalite'] ?></p>
                                    <p class="text-muted mb-0"> Année: <?= $auteur['dateNaissance'] ?></p>
                                    <p class="text-muted mb-0"> Description: <?= $auteur['biographie'] ?></p>
                                </div>
                                <div class="d-flex">
                                    <?php foreach ($livreauts as  $livreaut) { ?>

                                        <div class="py-4 px-5 bg-white rounded-1">
                                            <h3 class="fs-17 mb-1"><?= $livreaut['titre'] ?> </h3>
                                            <p class="text-muted mb-0">Nombre de page: <?= $livreaut['nombrePages'] ?></p>
                                            <p class="text-muted mb-0">Categorie: <?= $livreaut['nom'] ?></p>

                                            <!-- <p class="text-muted mb-0"> Année: <?= $livreaut['dateNaissance'] ?></p> -->

                                        </div>

                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="d-flex mt-0 py-4">
            <a href="auteur.php?modifier=<?= $auteur['id'] ?>" class="btn btn-primary" data-bs-target="#exampleModal">
                Modifier
            </a>

            <a href="http:auteur.php?delete=<?= $auteur['id'] ?>" class=" fw-semibold bg-color text-white px-2"><button class="btn btn-danger">Supprimer</button></a>
        </div>


    </div>
    
</section>