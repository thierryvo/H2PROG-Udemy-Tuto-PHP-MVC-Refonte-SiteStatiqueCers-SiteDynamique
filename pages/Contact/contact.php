<?php include("../communs/header.php");?>

<!-- Titre -->
<?= styleTitreNiveau1("Contact", COLOR_CONTACT) ?>

<!-- Titre n2 -->
<?= styleTitreNiveau2("Suivez-nous :", COLOR_CONTACT);?>
<p class="pl-5">
    <!-- Lien facebook a href : sur le petit carré bleu FaceDeBook -->
    <a href="https://www.facebook.com/nosamisnosanimaux/" target=_blank>
        <img src="../../sources/images/Autres/icones/facebook.png" width="30px" alt="Facebook"/>
    </a>
    Suivez-nous sur facebook et participez à l'aventure de Nos Amis Nos Animaux : 
    <!-- Même Lien facebook a href : sur une petite pastille  -->
    <a href="https://www.facebook.com/nosamisnosanimaux/" target=_blank>
        <span class="badge badge-pill badge-primary">Notre facebook</span>
    </a>
</p>

<!-- Titre n2 -->
<?= styleTitreNiveau2("Contactez-nous :", COLOR_CONTACT) ?>
<div class="pl-5">
    <p>
        <img src="../../sources/images/Autres/icones/courrier.png" width="30px" alt="courrier"/>
        Par courrier : Hameau de la Souleille - 09420 Clermont, Midi-Pyrenees, France
    </p>
    <p>
        <img src="../../sources/images/Autres/icones/mail.png" width="30px" alt="mail"/>
        Par mail : <a href="mailto:associationnosamisnosanimaux@gmail.com">associationnosamisnosanimaux@gmail.com</a>
    </p>
    <p>
        <img src="../../sources/images/Autres/icones/tel.png" width="30px" alt="tel"/>
        Par téléphone : 06 10 59 94 71
    </p>
    <p>
        <span class="badge badge-pill badge-danger">Ou</span> par notre <span class="badge badge-pill badge-warning">formulaire</span> de contact :
    </p>
</div>

<!-- Titre n2 : Formulaire de contact -->
<?= styleTitreNiveau2("Formulaire de contact :", COLOR_CONTACT) ?>

<?php
// ISSET: POST du formulaire ci-dessous ------------------------------------------------------------------------------------------------------ POST
if(
    isset($_POST['envoyerformulairedecontact']) &&
    isset($_POST['nom']) && !empty($_POST['nom']) && 
    isset($_POST['mail']) && !empty($_POST['mail']) &&
    isset($_POST['objet']) && !empty($_POST['objet']) &&
    isset($_POST['message']) && !empty($_POST['message']) &&
    isset($_POST['captcha']) && !empty($_POST['captcha'])
){
    // captcha
    $captcha = (int) $_POST['captcha'];
    // Vérification cpatcha
    if($captcha === 8){
        // ok:
        $nom = htmlentities($_POST['nom']);
        $mail = htmlentities($_POST['mail']);
        $objet = htmlentities($_POST['objet']);
        $message = htmlentities($_POST['message']);
        $destinataire = "associationnosamisnosanimaux@gmail.com";
        // Mail
        mail(
            $destinataire, 
            $objet. " - " . $nom, 
            "Mail : ". $mail. " Message : " . $message
        );
        echo '<div class="alert alert-success" role="alert">';
            echo 'Message envoyé';
        echo '</div>';
    } else {
        // ko - ERREUR 
        // affiche l'ERREUR: juste au-dessus du formulaire
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Erreur de Captcha, recommencer';
        echo '</div>';
    }
}//FINSI isset


// FRONT ------------------------------------------------------------------------------------------------------------------------- FORMULAIRE FRONT
?>
<form method="POST" action="#" class="pl-5">
    <!-- nom -->
    <div class="form-group row no-gutters align-items-center">
        <label for="nom" class="col-auto pr-3">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control col" Placeholder = "nom" required />
    </div>
    <!-- mail -->
    <div class="form-group row no-gutters align-items-center">
        <label for="mail" class="col-auto pr-3">Email :</label>
        <input type="email" name="mail" id="mail" class="form-control col" Placeholder = "nom@exemple.com" required />
    </div>
    <!-- objet -->
    <!-- SELECTEUR objet: question, adoption, donnation, Autres -->
    <div class="form-group row no-gutters align-items-center">
        <label for="objet" class="col-auto pr-3">Objet :</label>
        <select class='form-control col' id="objet" name="objet">
            <option value="question">Question</option>
            <option value="adoption">Adoption</option>
            <option value="donnation">Donnation</option>
            <option value="autre">Autre</option>
        </select>
    </div>

    <!-- message : dans une zone de texte textarea à 3 rows -->
    <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
    </div>
    <!-- captcha : Vérification 5 + 3 -->
    <div class="form-group row no-gutters align-items-center">
        <label for="captcha" class="col-auto pr-3">Combien font 3+5 :</label>
        <input type="number" name="captcha" id="captcha" class="form-control col" required />
    </div>

    <!-- BOUTON : VALIDER -->
    <input type="submit" class="btn btn-primary mx-auto d-block" value="Valider" name="envoyerformulairedecontact" />
</form>

<?php include("../communs/footer.php"); ?>
            