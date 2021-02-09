<?php session_start(); ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="list.php">Etudiant</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="profil.php">Profil</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="logOut.php" style="color: DodgerBlue;">
            	Déconnexion  [<?php echo ( $_SESSION['PROFIL']['prenom']." ".$_SESSION['PROFIL']['nom'] ); ?>]
            </a>
        </li>
    </ul>
</nav>