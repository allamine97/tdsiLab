<?php session_start(); ?>

<?php if ( isset( $_SESSION['CONNECTION_FAILURE'] ) ) {?>

	<div class="alert alert-danger">
        <strong>Les informations saisies sont invalides. Veuillez ressayer</strong>
    </div>
    
<?php } ?>
