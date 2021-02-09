<?php require_once 'layout/security.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <?php require_once 'layout/header.php'; ?>
    <title>Mon Profil</title>
</head>
<body>

	<?php require_once 'layout/navbar.php'; ?>
    <div class="container marge-top-max">
    
        <?php require_once 'alert/profilAlert.php'; ?>
        
        <div class="row mt-10">
        
        	<!-- Bloc Vide -->
        	<div class="col-md-1"></div>
            
            <!-- Information -->
            <div class="col-md-5">
            	<div class="alert alert-info">
                	<strong>Informations</strong>
            	</div>
                <table class="table">
                	<tbody>
                		<tr>
                			<td>Numéro de carte : </td>
                			<td><?php echo $_SESSION['PROFIL']['num_carte'] ?></td>
                		</tr>
                		<tr>
                			<td>Nom : </td>
                			<td><?php echo $_SESSION['PROFIL']['nom'] ?></td>
                		</tr>
                		<tr>
                			<td>Prénom</td>
                			<td><?php echo $_SESSION['PROFIL']['prenom'] ?></td>
                		</tr>
                		<tr>
                			<td>Email : </td>
                			<td><?php echo $_SESSION['PROFIL']['email'] ?></td>
                		</tr>
                	</tbody>
                </table>
            </div>
        	
        	<!-- Avatar -->
            <div class="col-md-5">
            	<img alt="Image Avatar" src="img/<?php echo $_SESSION['PROFIL']['photo'] ?>" class="d-block w-100 rounded">
            </div>
            
            <!-- Bloc Vide -->
            <div class="col-md-1"></div>
            
        </div>
            
        <div class="m-3">
        	<a href="edit.php" class="btn btn-success">Editer mon profil</a>
    	</div>
        
    </div>
    
</body>
</html>