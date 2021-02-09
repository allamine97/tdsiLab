<?php 

    //------- Inclusion des fichiers requis
    require_once 'layout/security.php';
    require_once 'src/etudiantCRUD.php';
    
    //------- Determiner les valeur de LIMIT et OFFSET pour la requete SELECT
    $limit = 5;
    isset($_GET['numroPage']) ? 
        $numroPage = $_GET['numroPage'] : 
        $numroPage = 0;
    $offset = $limit * $numroPage;
    
    //------ La liste des Etudiants
    $crud = new EtudiantCRUD();
    isset( $_SESSION['MOT_CLE'] ) ?
        $motCle = $_SESSION['MOT_CLE'] :
        $motCle = "";
    $listEtudiants = $crud->getEtudiants($limit, $offset, $motCle);
    
    //-------- la pagination du tableau
    $nombreEtudiants = $crud->countEtudiants($motCle);
    ($nombreEtudiants % $limit == 0)? 
        $nombrePages = floor( $nombreEtudiants / $limit) : 
        $nombrePages = floor( $nombreEtudiants / $limit) + 1;

?>
<!DOCTYPE html>
<html>
<head>
    <?php require_once 'layout/header.php'; ?>
    <title>Liste Etudiants</title>
</head>
<body>
    <?php require_once 'layout/navbar.php'; ?>
    <div class="container marge-top-max">
    
    	<!-- begin alert -->
        <div class="alert alert-secondary">
            <strong>Liste des Etudiants</strong>
        </div>
        <!-- end alert -->
        
        <!-- begin row -->
        <div class="row mt-10">
        
            <div class="col-md-2"></div>
            
            <div class="col-md-8">
            
            	<!-- begin form -->
            	<div>
                	<form class="form-inline" action="controller.php" method="get">
                        <input name="motCle" type="text" value="<?php echo $motCle; ?>" placeholder="Search" class="form-control mr-sm-2">
                        <button name="search" type="submit" class="btn btn-success">Search</button>
                  	</form>
              	</div>
            	<!-- end form -->
            	
            	<br/>
            	
            	<!-- begin table -->
                <table class="table table-striped table-hover ">
                    <thead class="thead-dark">
                        <tr>
                            <th>N° Carte</th>
                            <th>Prénom </th>
                            <th>Nom </th>
                            <th>Email</th>
                            <th>Avatar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listEtudiants as $etudiant) { ?>
                            <tr>
                            	<td><?php echo $etudiant->getNumCarte(); ?></td>
                            	<td><?php echo $etudiant->getPrenom(); ?></td>
                            	<td><?php echo $etudiant->getNom(); ?></td>
                            	<td><?php echo $etudiant->getEmail(); ?></td>
								<td><img src="img/<?php echo $etudiant->getPhoto(); ?>" class="rounded" width="35" height="35"/></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- end table -->
                
                <br/>
                
                <!-- begin pagination -->
                <div>
					<ul class="pagination justify-content-center">
    					<?php for ($i = 0; $i < $nombrePages; $i++) {?>
        					<li class="page-item <?php echo( ($i==$numroPage) ? 'active':'' )?>">
        						<a class="page-link" href="list.php?numroPage=<?php echo($i)?>">Page <?php echo($i+1)?></a>
    						</li>
    					<?php }?>
    				</ul>
				</div>
				 <!-- end pagination -->
				
            </div>
            
            <div class="col-md-2"></div>
            
        </div>
        <!-- end row -->
        
    </div>

</body>
</html>