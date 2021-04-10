<?php

ini_set('display_errors',1);

// Inclusion de la database :
require_once(__DIR__."/config/database.php");
// Inclusion du header:
require_once(__DIR__."/includes/header.php");
// Inclusion de la navbar
require_once(__DIR__."/includes/nav.php");

if(isset($_GET['id'])){

    $sql = $pdo->prepare("SELECT * FROM logement WHERE id_logement=:id");
    $sql->execute(['id' => $_GET['id']]);
    $maisons = $sql->fetch(PDO::FETCH_ASSOC);
    /*echo '<pre>';
    echo print_r($maisons);
    echo '</pre>';*/
}
?>

<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
    <div class="col-12 col-md-6">
        <img style="width:100%;"src="uploads/<?= $maisons['photo']?>" alt="">
    </div>
    <div class="col-12 col-md-6 p-3 form-group d-flex flex-column justify-content-center">
        <h1><?= $maisons['titre']?></h1>
        <div class="row d-flex justify-content-between">
            <h3>Prix : <?= $maisons['prix'].'€'?></h3>
            <h3>Surface : <?= $maisons['surface'].'m²'?></h3>
            <h3>Type :<?= $maisons['type']?></h3>
        </div>
        <div class="row d-flex justify-content-between">
            <h4>Ville : <?= $maisons['ville']?></h4>
            <h4>Adresse : <?= $maisons['adresse']?></h4>
            <h4>Code Postal :<?= $maisons['cp']?></h4>
        </div>
        <p><?= $maisons['description']?></p>
        <div>
            <button type="submit" name="achat" class="btn btn-primary">Acheter/Louer</button>
        </div>
    </div>
</div>
<?php
// Inclusion du footer:
require_once(__DIR__."/includes/footer.php");
?>