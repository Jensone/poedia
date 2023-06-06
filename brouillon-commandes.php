


_____


<?php

use App\Database;

require_once 'Database/Database.php';

$commandes = Database::afficherTout('commandes');

var_dump($commandes);

include_once 'partials/_head.php'; 

      <section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">

      <?php include_once 'partials/_navigation.php'; ?>
      foreach ($commandes as $commande)
        <div>
            <h3 class="fs-17 mb-1">Vos commandes</h3>
            <p class="text-muted mb-0">Commande <?=$commandes['id']?><?=$commandes['id']?></p>
            <p class="text-muted mb-0">Emprunté par : <?=$commandes['idClients']?></p>
            <p class="text-muted mb-0">Livre(s) : <?=$commandes['idLivre']?></p>
            <p class="text-muted mb-0">Date d'emprunt : <?=$commandes['dateDebut']?></p>
            <p class="text-muted mb-0">Date de retour : <?=$commandes['dateRetour']?></p>
            <p class="text-muted mb-0">Statut : <?=$commandes['statut']?></p>
        </div>

    </section>
<?php include_once 'partials/_footer.php'; ?>