<?php 

require_once 'etudiant.php';
require_once 'connectionDB.php';


class  EtudiantCRUD {
    
    
    public function __construct() {}
    
    public function addEtudiant(Etudiant $etd) {
        try {
            $cnxClass = new ConnectionDB();
            $pdo = $cnxClass->getPdo();
            $stmt = $pdo->prepare
            ("INSERT INTO etudiant (num_carte,nom,prenom,email,photo,mot_de_passe) VALUES (?,?,?,?,?,?)");
            $params = array(
                $etd->getNumCarte(),
                $etd->getNom(),
                $etd->getPrenom(),
                $etd->getEmail(),
                $etd->getPhoto(),
                $etd->getMotDePasse()
            );
            $stmt->execute($params);
            return true;
        } catch (PDOException $e) {
            echo ($e->getMessage());
            return false;
        }
    }
    
    public function connect($login, $motDePasse) {
        $response = null;
        try {
            $cnxClass = new ConnectionDB();
            $pdo = $cnxClass->getPdo();
            $stmt = $pdo->prepare("SELECT * FROM etudiant");
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                $log = $row['email'];
                $mdp = $row['mot_de_passe'];
                if ($login == $log && $motDePasse == $mdp) {
                    $response = $row;
                    break;
                }
            }
        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
        return  $response;
    }
    
    /*public function getList() {
        try {
            $etds = array();
            $cnxClass = new ConnectionDB();
            $pdo = $cnxClass->getPdo();
            $stmt = $pdo->prepare("SELECT * FROM etudiant");
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                $etd = new Etudiant();
                $etd->setNumCarte($row['num_carte']);
                $etd->setNom($row['nom']);
                $etd->setPrenom($row['prenom']);
                $etd->setEmail($row['email']);
                $etds[] = $etd;
            }
            return $etds;
        } catch (PDOException $e) {
            echo ($e->getMessage());
            return null;
        }
    }*/
    
    public function countEtudiants($motCle) {
        try {
            $motCle = '%' . $motCle . '%';
            $cnxClass = new ConnectionDB();
            $pdo = $cnxClass->getPdo();
            $stmt = $pdo->prepare("SELECT COUNT(*) AS nombreEtudiants FROM etudiant WHERE num_carte LIKE ? OR nom LIKE ? OR prenom LIKE ? ");
            $params = array($motCle, $motCle, $motCle);
            $stmt->execute($params);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $nombreEtd = $row['nombreEtudiants'];
            return $nombreEtd;
        } catch (PDOException $e) {
            echo ($e->getMessage());
            return null;
        }
    }
    
    public function getEtudiants($limit, $offset, $motCle) {
        try {
            $motCle = '%' . $motCle . '%';
            $etds = array();
            $cnxClass = new ConnectionDB();
            $pdo = $cnxClass->getPdo();
            $stmt = $pdo->prepare("SELECT * FROM etudiant WHERE num_carte LIKE ? OR nom LIKE ? OR prenom LIKE ?  ORDER BY nom ASC LIMIT $limit OFFSET $offset");
            $params = array($motCle, $motCle, $motCle);
            $stmt->execute($params);
            while ($row = $stmt->fetch()) {
                $etd = new Etudiant();
                $etd->setNumCarte($row['num_carte']);
                $etd->setNom($row['nom']);
                $etd->setPrenom($row['prenom']);
                $etd->setEmail($row['email']);
                $etd->setPhoto($row['photo']);
                $etds[] = $etd;
            }
            return $etds;
        } catch (PDOException $e) {
            echo ($e->getMessage());
            return null;
        }
    }
    
    public function updateEtudiant(Etudiant $etd) {
        try {
            $cnxClass = new ConnectionDB();
            $pdo = $cnxClass->getPdo();
            $stmt = $pdo->prepare
            ("UPDATE etudiant SET nom=?, prenom=?, email=?, photo=?, mot_de_passe=? WHERE num_carte=?");
            $params = array(
                $etd->getNom(),
                $etd->getPrenom(),
                $etd->getEmail(),
                $etd->getPhoto(),
                $etd->getMotDePasse(),
                $etd->getNumCarte()
            );
            $stmt->execute($params);
            return true;
        } catch (PDOException $e) {
            echo ($e->getMessage());
            return false;
        }
    }
    
}

?>