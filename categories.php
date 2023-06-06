<?php
    namespace App;
    Use App\Categorie;
    Use App\Livre;
    require_once './classes/Categories/Categorie.php';
    require_once './classes/Livre/Livre.php';
    $id_c = $_GET['id'];
    $cat = $_GET['cat'];
    $categorie = Categorie::afficherUnecategorie($id_c);
    $livres = Livre::afficherLesLivresParCategorie($cat);
    include_once './partials/_head.php';
     ?>
    <section style="background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%);">
        <?php include_once './partials/_navigation.php'; ?>
    </section>
    <section class="pt-20 pb-32 bg-secondary overflow-hidden" style="background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%);">
        <div class="mw-md-lg mx-auto text-center mb-20">
            <h1><?=$categorie[0]['nom']?></h1>
            <p><?=$categorie[0]['description']?></p>
        </div>  
    </section>
    <section style="background: #111827">livre
        <div class="container">
              <div class="text-center mb-20">
                <h2 class="fs-10 fw-semibold text-white mb-5">Livres</h2>
                <p class="d-inline-block fs-20 fw-semibold text-white text-uppercase mb-6" style="letter-spacing: 1px; background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">les livres appartenant à cette categorie</p>
              </div>
              <div class="container">
                <div class="row g-6">
                <?php foreach ($livres as $livre) {?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                      <div class="d-flex justify-content-center">
                        <img class="w-100" src="gradia-assets/images/teams/avatar-xl.png" alt="">
                    </div>
                    <div class="position-absolute bottom-0 start-0 p-3 w-100">
                        <div class="py-4 px-5 bg-white rounded-1">
                            <h3 class="fs-17 mb-1"><?=$livre['titre']?></h3>
                            <p class="text-muted mb-0">Auteur: <?=$livre['auteur']?></p>
                            <p class="text-muted mb-0">Edition: <?=$livre['dateParution']?></p>
                            <p class="text-muted mb-0">Nombre de Page: <?=$livre['nombrePages']?></p>
                            <p class="text-muted mb-0"> Stock disponnible: <?=$livre['stock']?></p>
                        </div>
                    </div>
                </div>
              </div>
            <?php }?>
        </div>
    </section>
<?php include_once './partials/_footer.php'; ?>