<?php

ini_set('display_errors',1);

// Inclusion de la database :
require_once(__DIR__."/config/database.php");
// Inclusion du header:
require_once(__DIR__."/includes/header.php");
// Inclusion de la navbar
require_once(__DIR__."/includes/nav.php");

$stm = $pdo->query("SELECT * FROM logement");
$nb_log = $stm->rowCount();
$logements = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<h2 class="text-center text-uppercase font-weight-bold mt-2 p-3 bg-info">Liste des logements</h2>

<main role="main">
    <div class="container-fluid">
        <?php if($nb_log > 0){ ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Surface</th>
                    <th scope="col">Type</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Code Postal</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($logements as $logement){ ?>
                <tr>
                    <td>
                        <img src="uploads/<?=$logement['photo']?>" alt="<?=$logement['titre']?>" style=" width:100%; height:200px; object-fit:cover;">
                    </td>
                    <td><?=$logement['titre']?></td>
                    <td><?=$logement['prix'].'€'?></td>
                    <td><?=$logement['surface'].'m²'?></td>
                    <td><?=$logement['type']?></td>
                    <td><?=$logement['adresse']?></td>
                    <td><?=$logement['ville']?></td>
                    <td><?=$logement['cp']?></td>
                    <td style="width:15%;"><?=substr($logement['description'],0,100).' ...'?></td>
                    <td>
                        <a href="logement.php?id=<?=$logement['id_logement']?>" class="btn btn-primary">Voir</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <?php }else{
            echo '<div class"alert alert-danger" role="alert">Il n\'y a aucun logement de disponible !</div>';
        }
        ?>
    </div>
</main>

<?php
// Inclusion du footer:
require_once(__DIR__."/includes/footer.php");
?>