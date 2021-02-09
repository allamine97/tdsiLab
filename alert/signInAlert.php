<?php session_start(); ?>

<?php if ( isset( $_SESSION['INSCRIPTION_FAILURE'] ) ) {?>

	<div class="alert alert-danger">
        <strong>Les informations saisies sont invalides. Veuillez ressayer</strong>
    </div>
    
<?php } else { ?>

	<div class="alert alert-secondary">
        <strong>Formulaire d'inscription</strong>
    </div>

<?php } ?>