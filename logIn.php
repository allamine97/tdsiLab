<!DOCTYPE html>
<html>
<head>
    <?php require_once 'layout/header.php'; ?>
    <title>Connexion</title>
</head>
<body>

    <div class="container p-2">
    	<?php require_once 'alert/logInAlert.php'; ?>
    	
        <div class="row mt-1">
        
            <div class="col-md-3"></div>
            
            <div class="col-md-6">
                <div class="card p-5 m-4 alert-secondary" >
                  	<div class="card-head">
                  		<h4 class="card-title">Connexion</h4>
                  	</div>
                  	<div class="card-body">
                      	<form action="controller.php" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="login" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="mot_de_passe" class="form-control" id="pwd">
                            </div>
                            <button type="submit" name="connect" class="btn btn-success">Se Connecter</button>
                        </form>
                        <div class=" mt-5">
                        	<p class="text-center">
                        		Vous n'avez pas de compte ?
                        		<a href="signIn.php" class="btn btn-primary">Inscrivez vous</a>
                        	</p>
                        </div>
                  	</div>
                </div>
            </div>
            
            <div class="col-md-3"></div>
            
        </div>
        
    </div>
    
</body>
</html>