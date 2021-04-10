<?php
ini_set('display_errors',1);

// Inclusion de la database :
require_once(__DIR__."/config/database.php");
// Inclusion du header:
require_once(__DIR__."/includes/header.php");
// Inclusion de la navbar
require_once(__DIR__."/includes/nav.php");

/*echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<pre>';
print_r($_FILES);
echo '</pre>';*/
if(!empty($_POST) && !empty($_FILES)){

    // On récupère le nom de la photo dans la variable $nom_photo
    $nom_photo = $_FILES['file']['name'];
    // On récupère le type de la photo dans la variable $type_photo
    $type_du_fichier = $_FILES['file']['type'];
    // On récupère l'adresse du dossier temporaire
    $dossier_temporaire = $_FILES['file']['tmp_name'];
    // On définit le dossier où sera uploadé la photo
    $dossier_uploads = "uploads/".$nom_photo;


    $extension_du_fichier = strrchr($nom_photo, '.');

    $extension_autorisees = array('.jpg', '.JPG','.jpeg','.JPEG','.png','.PNG');

    if(in_array($extension_du_fichier, $extension_autorisees)){

        $ok = true;

        if(!isset($_POST['titre']) || strlen($_POST['titre']) < 5){
            echo '<div class="alert alert-danger" role="alert">Le titre est invalide !</div>';
            $ok = false;
        }

        if(!isset($_POST['adresse']) || strlen($_POST['adresse']) < 5){
            echo '<div class="alert alert-danger" role="alert">L\'adresse du logement est invalide !</div>';
            $ok = false;
        }

        if(!isset($_POST['ville']) || strlen($_POST['ville']) < 5){
            echo '<div class="alert alert-danger" role="alert">La ville est invalide !</div>';
            $ok = false;
        }

        if(!isset($_POST['cp']) || !ctype_digit($_POST['cp'])){
            echo '<div class="alert alert-danger" role="alert">Le code postale est invalide !</div>';
            $ok = false;
        }

        if(!isset($_POST['surface']) || !is_numeric($_POST['surface'])){
            echo '<div class="alert alert-danger" role="alert">La surface est invalide !</div>';
            $ok = false;
        }

        if(!isset($_POST['prix']) || !is_numeric($_POST['prix'])){
            echo '<div class="alert alert-danger" role="alert">Le prix est invalide !</div>';
            $ok = false;
        }

        if($_FILES['file']['size'] > 2000000){
            echo '<div class="alert alert-danger" role="alert">Le fichier ne doit pas dépasser 2 Mo !</div>';
        }

        if(!isset($_POST['description']) || strlen($_POST['description']) < 5){
            echo '<div class="alert alert-danger" role="alert">La description est invalide !</div>';
            $ok = false;
        }

        if($ok == true){
            
            if(move_uploaded_file($dossier_temporaire,$dossier_uploads)){

                echo '<div class="alert alert-success" role="alert">Fichier envoyé avec succès !</div>';

                $sql = 'INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description) VALUES(?,?,?,?,?,?,?,?,?)';
                $pdo->prepare($sql)->execute([$_POST['titre'], $_POST['adresse'], $_POST['ville'], $_POST['cp'], $_POST['surface'], $_POST['prix'], $_FILES['file']['name'], $_POST['type'], $_POST['description']]);
                echo '<div class="alert alert-success" role="alert">Le formulaire a bien été envoyé !</div>';

            }else{
                echo '<div class="alert alert-danger" role="alert">Une erreur est survenue lors de l\'upload de la photo !</div>';
            }
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">Vous pouvez télécharger uniquement des fichiers .jpg, .jpeg et .png !</div>';
    }
}
?>

<h2 class="text-center text-uppercase font-weight-bold mt-2 p-3 bg-info">Formulaire</h2>

<div class="container col-11 col-md-8 col-lg-6 mt-3 mb-3">
    <form action="#" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Champs à remplir</legend>
            <div class="form-group">
                <label for="titre">Titre du logement :</label>
                <input type="text" class="form-control" name="titre" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse du logement :</label>
                <input type="text" class="form-control" name="adresse" required>
            </div>
            <div class="form-group">
                <label for="ville">Ville :</label>
                <input type="text" class="form-control" name="ville" required>
            </div>
            <div class="form-group">
                <label for="cp">Code Postal :</label>
                <input type="text" class="form-control" name="cp" minlength="5" required>
            </div>
            <div class="form-group">
                <label for="surface">Surface :</label>
                <input type="text" class="form-control" name="surface" required>
            </div>
            <div class="form-group">
                <label for="prix">Prix :</label>
                <input type="text" class="form-control" name="prix" required>
            </div>
            <div class="form-group">
                <label for="type">Type :</label>
                <select name="type" id="type" class="form-control">
                    <option value="location">Location</option>
                    <option value="vente">Vente</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea name="description" id="description" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="file">Photo à uploader :</label>
                <input type="file" name="file" class="form-control-file" id="file">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </fieldset>
    </form>
</div>

<?php
// Inclusion du footer:
require_once(__DIR__."/includes/footer.php");
?>



