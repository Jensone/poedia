<div  class="form container col-6 offset-3">
    <form action="auteur.php?all" method="POST" class="d-flex flex-column p-3">
        <div class="d-flex flex-column form-groupe" class="d-flex flex-column form-groupe">
            <label for="nom">Nom</label>
            <input class="m-2" type="text" name="nom" value=<?= isset($_GET['add']) ? "" : $auteur['nom'] ?>>
        </div>
        <div class="d-flex flex-column form-groupe">
            <label for="prenom">Prenom</label>
            <input class="m-2" type="text" name="prenom" value=<?= isset($_GET['add']) ? "" : $auteur['prenom'] ?>>
        </div>
        <div class="d-flex flex-column form-groupe">
            <label for="notionalite">Nationalite</label>
            <input class="m-2" type="text" name="nationalite" value=<?= isset($_GET['add']) ? "" : $auteur['nationalite'] ?>>
        </div>
        <div class="d-flex flex-column form-groupe">
            <label for="date">Date de naissance</label>
            <input class="m-2" type="Date" name="dateNaissance" value=<?= isset($_GET['add']) ? "" : $auteur['dateNaissance'] ?>>

        </div>
        <div class="d-flex flex-column form-groupe">
            <label for="biographie">Biographie</label>
            <textarea class="m-2" name="biographie" type="text"><?= isset($_GET['add']) ? "" : $auteur['biographie'] ?></textarea>

        </div>
       <div >
       <input type="submit" class="m-2" name="action" value=<?= isset($_GET['add']) ? "Ajouter" : "Modifier" ?>>
        <input type="hidden" class="m-2" name="id" value=<?= isset($_GET['add']) ? "" : $auteur['id'] ?>>
       </div>

    </form>
</div>