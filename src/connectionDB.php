<?php
class ConnectionDB {
    
    private $_sqlUrl;
    private $_user;
    private $_password;
    private $_pdo = NULL;
    

    public function __construct()
    {
        $this->_sqlUrl = "mysql:host=localhost;dbname=tdsi";
        $this->_user = "dbaTDSI";
        $this->_password = "Passe";
    }
    
    public function getPdo()
    {
        try {
            $this->_pdo = new PDO($this->_sqlUrl, $this->_user, $this->_password);
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERREUR PDO :: '. $e->getMessage());
        }
        return $this->_pdo;
    }
    
}