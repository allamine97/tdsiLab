<?php session_start(); ?>

<?php if ( isset( $_SESSION['EDIT_FAILURE'] ) && $_SESSION['EDIT_FAILURE'] !== NULL ) {?>

	<div class="alert alert-danger">
        <strong>Les informations saisies sont invalides. Veuillez ressayer</strong>
    </div>
    
<?php } else if ( isset( $_SESSION['EDIT_SUCCESS'] ) && $_SESSION['EDIT_SUCCESS'] !== NULL ) { ?>

	<div class="alert alert-secondary">
        <strong>Modifications de Profil</strong>
    </div>

<?php } ?>