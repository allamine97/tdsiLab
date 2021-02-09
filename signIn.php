
<!DOCTYPE html>
<html>
<head>
    <?php require_once 'layout/header.php'; ?>
    <title>Inscription</title>
</head>
<body>

    <div class="container marge-top-min">
        <?php require_once 'alert/signInAlert.php'; ?>
        
        <div class="row">
        
        	<div class="col-md-1"></div>
        	
        	<!-- Design -->
            <div class="col-md-5">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="img/developer-department.jpg">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/network-department.jpg">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/security-department.jpg">
						</div>
					</div>
					<a class="carousel-control-prev" href="#" role="button" data-slide="prev"> 
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> 
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
            
            <div class="col-md-1"></div>
            
            <!-- Formulaire -->
            <div class="col-md-4">
            	<h5 class="text-center">Inscription</h5>
                <form action="controller.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input placeholder="Prénom" type="text" name="prenom" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Nom" type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Numéro de Carte" type="text" name="num_carte" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Email" type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Mot de passe" type="password" name="mot_de_passe" class="form-control">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input">
                        <label class="custom-file-label">votre photo</label>
                  	</div>
                    <div class="mt-4 form-group">
                        <button type="submit" class="btn btn-success" name="add_etudiant">Soumettre</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                	</div>
                </form>
                <div class="row justify-content-center mt-3">
                	<p class="text-center">Si vous avez un compte ? <a href="logIn.php" class="btn btn-primary">Connectez vous</a></p>
                </div>
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