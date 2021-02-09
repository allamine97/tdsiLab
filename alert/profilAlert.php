<?php session_start(); ?>

<?php if ( isset( $_SESSION['EDIT_SUCCESS'] ) && $_SESSION['EDIT_SUCCESS'] !== NULL ) {?>

	<div class="alert alert-success">
        <strong>Profil Mis à Jour</strong>
    </div>
    
<?php } else  { ?>

	<div class="alert alert-secondary">
        <strong>Mon Profil</strong>
    </div>

<?php } ?>