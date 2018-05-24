<?php
require_once("model/Manager.php");

class ConnexionManager extends Manager
{
    public function getConnexion($email, $password){
        $db = $this->dbConnect();
        
        $connexion = $db->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
        $connexion->execute(array($email, $password));
        
        $data = $connexion->fetch();

        return $data;
    }
    
    public function getInfo() {
        session_start();
        $email = $_SESSION['email'];
        
        $db = $this->dbConnect();
        $prenom = $db->prepare('SELECT id, name, firstname, email, DATE_FORMAT(register_date, \'%d/%m/%Y\') AS register_date_fr, grade FROM users WHERE email = ?');
        $prenom->execute(array($email));
        $mesInfos = $prenom->fetch();
        
        return $mesInfos;
    }
    
    public function setMesInfos($name, $firstname, $email, $id) {
        $db = $this->dbConnect();
        
        $mesInfos = $db->prepare('UPDATE users SET name=?, firstname=?, email=? WHERE id=?');
        $mesInfos->execute(array($name, $firstname, $email, $id));
        
        return $mesInfos;
    }
}