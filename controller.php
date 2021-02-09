<?php 
require_once 'src/etudiantCRUD.php';

$crud = new EtudiantCRUD();

session_start();

    //----------- begin signIn.php Controller
    if ( isset($_POST['add_etudiant']) && !empty($_FILES['photo']) ) 
    {
        if($_FILES['photo']['error'] == 0 && is_uploaded_file($_FILES['photo']['tmp_name']))
        {
            $numCarte = $_POST['num_carte'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $photo = $_FILES['photo']['name'];
            $motDePasse = $_POST['mot_de_passe'];
            
            $photoTmp = $_FILES['photo']['tmp_name'];
            $extension = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
            
            $etd = new Etudiant();
            $etd->setNumCarte($numCarte);
            $etd->setNom($nom);
            $etd->setPrenom($prenom);
            $etd->setEmail($email);
            $etd->setPhoto($photo);
            $etd->setMotDePasse($motDePasse);
            
            if ($photo !== 'zwx.jpg' &&  !move_uploaded_file($photoTmp, "img/$numCarte.$extension"))
            {
                $etd->setPhoto('zwx.jpg');
            }
            $execute = $crud->addEtudiant($etd);
            
            if ($execute == true)
            {
                $_SESSION['PROFIL'] = $crud->connect($email, $motDePasse);;
                header("location:index.php");
                
            } else 
            {
                $_SESSION['INSCRIPTION_FAILURE'] = INSCRIPTION_FAILURE;
                header("location:signIn.php");
            }
            
        } else
        {
            $_SESSION['INSCRIPTION_FAILURE'] = INSCRIPTION_FAILURE;
            header("location:signIn.php");
        }
    }
    //----------- end signIn.php Controller
    

    //----------- begin logIn.php Controller
    if (isset($_POST['connect'])) {
        
        $login = $_POST['login'];
        $mdp = $_POST['mot_de_passe'];
        
        if ($login != '' && $mdp != '')
        {
            $cnx = $crud->connect($login,$mdp);
            if ($cnx != null)
            {
                $_SESSION['PROFIL'] = $cnx;
                header("location:index.php");
                
            } else 
            {
                $_SESSION['CONNECTION_FAILURE'] = 'CONNECTION_FAILURE';
                header("location:logIn.php");
            }
            
        } else 
        {
            $_SESSION['CONNECTION_FAILURE'] = 'CONNECTION_FAILURE';
            header("location:logIn.php");
        }
    }
    //----------- end logIn.php Controller
    
    
    //----------- begin edit.php Controller
    if ( isset($_POST['update_etudiant']) && !empty($_FILES['photo']) )
    {
        if($_FILES['photo']['error'] == 0 && is_uploaded_file($_FILES['photo']['tmp_name']))
        {
            $numCarte = $_POST['num_carte'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $photo = $_FILES['photo']['name'];
            $motDePasse = $_POST['mot_de_passe'];
            
            $photoTmp = $_FILES['photo']['tmp_name'];
            $extension = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
            
            $etd = new Etudiant();
            $etd->setNumCarte($numCarte);
            $etd->setNom($nom);
            $etd->setPrenom($prenom);
            $etd->setEmail($email);
            $etd->setPhoto($photo);
            $etd->setMotDePasse($motDePasse);
            
            if ($photo !== 'zwx.jpg' &&  !move_uploaded_file($photoTmp, "img/$numCarte.$extension"))
            {
                $etd->setPhoto('zwx.jpg');
            }
            $execute = $crud->updateEtudiant($etd);
            
            if ($execute == true)
            {
                $_SESSION['EDIT_FAILURE'] = NULL;
                $_SESSION['EDIT_SUCCESS'] = EDIT_SUCCESS;
                $_SESSION['PROFIL'] = $crud->connect($email, $motDePasse);
                header("location:profil.php");
                
            } else
            {
                $_SESSION['EDIT_SUCCESS'] = NULL;
                $_SESSION['EDIT_FAILURE'] = EDIT_FAILURE;
                header("location:edit.php");
            }
            
        } else
        {
            $_SESSION['EDIT_SUCCESS'] = NULL;
            $_SESSION['EDIT_FAILURE'] = EDIT_FAILURE;
            header("location:edit.php");
        }
    }
    //----------- end edit.php Controller
    
    
    //----------- begin list.php Controller
    if ( isset($_GET['search']) ) 
    {
        $_SESSION['MOT_CLE'] = $_GET['motCle'];
        header("location:list.php");
    }
    //----------- end list.php Controller

?>