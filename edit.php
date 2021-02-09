<!DOCTYPE html>
<html>
<head>
    <?php require_once 'layout/header.php'; ?>
    <title>Editer Profil</title>
</head>
<body>
	<?php require_once 'layout/navbar.php'; ?>
	
    <div class="container marge-top-max">
        <?php require_once 'alert/editAlert.php'; ?>
        
        <div class="row">
        
        	<div class="col-md-1"></div>
        	
        	<!-- Design -->
            <div class="col-md-5">
				<img class="d-block w-100" src="img/<?php echo $_SESSION['PROFIL']['photo'] ?>">
			</div>
            
            <div class="col-md-1"></div>
            
            <!-- Formulaire -->
            <div class="col-md-4">
            	<h5 class="text-center">Editer profil</h5>
                <form action="controller.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input 
                        	value="<?php echo $_SESSION['PROFIL']['nom'] ?>" 
                        	placeholder="nom" type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <input 
                        	value="<?php echo $_SESSION['PROFIL']['prenom'] ?>" 
                        	placeholder="prenom" type="text" name="prenom" class="form-control">
                    </div>
                    <div class="form-group">
                        <input 
                        	value="<?php echo $_SESSION['PROFIL']['num_carte'] ?>" 
                        	placeholder="Numero de carte" type="text" name="num_carte" hidden="hidden" class="form-control">
                    </div>
                    <div class="form-group">
                        <input 
                        	value="<?php echo $_SESSION['PROFIL']['email'] ?>" 
                        	placeholder="email" type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input 
                        	placeholder="Nouveau mot de passe" 
                        	type="password" name="mot_de_passe" class="form-control">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input">
                        <label class="custom-file-label">Nouveau photo</label>
                  	</div>
                    <div class="mt-4 form-group">
                        <button type="submit" class="btn btn-success" name="update_etudiant">Soumettre</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                	</div>
                </form>
            </div>
            
            <div class="col-md-1"></div>
            
        </div>
    </div>
    
    <script>
        $(".custom-file-input").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    
</body>
</html>