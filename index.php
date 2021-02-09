<?php require_once 'layout/security.php';  ?>
<!DOCTYPE html>
<html>
<head>
    <?php require_once 'layout/header.php'; ?>
    <title>Welcome</title>
</head>
<body>

	<?php require_once 'layout/navbar.php'; ?>

	<section class="marge-top-min">
    	<div class="jumbotron text-center">
            <h1>Welcome to TDSI</h1>
            <p>Entreprise L3 TDSI MCS 2019</p>
        </div>
    </section>
    
    <section class="p-5">
    	<div class="container row">
    		<div class="col-sm-1"></div>
    		<div class="col-sm-4">
    			<img class="card-img-bottom " src="img/developer-department.jpg">
    		</div>
    		<div class="col-sm-6">
              	<h4 class="card-title">Developer Department</h4>
                <p class="card-text">Some example text.</p>
    		</div>
    		<div class="col-sm-1"></div>
    	</div>
    </section>
    
    <section class="p-5">
    	<div class="container row">
    		<div class="col-sm-1"></div>
    		<div class="col-sm-6">
              	<h4 class="card-title">Network Department</h4>
                <p class="card-text">Some example text.</p>
    		</div>
    		<div class="col-sm-4">
    			<img class="card-img-bottom " src="img/network-department.jpg">
    		</div>
    		<div class="col-sm-1"></div>
    	</div>
    </section>
    
    <section class="p-5">
    	<div class="container row">
    		<div class="col-sm-1"></div>
    		<div class="col-sm-4">
    			<img class="card-img-bottom " src="img/security-department.jpg">
    		</div>
    		<div class="col-sm-6">
              	<h4 class="card-title">Security Department</h4>
                <p class="card-text">Some example text.</p>
    		</div>
    		<div class="col-sm-1"></div>
    	</div>
    </section>

</body>
</html>