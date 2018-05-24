<?php
require_once("model/Manager.php");

class RegisterManager extends Manager
{
    public function setRegister($name, $firstname, $email, $password) {
        $db = $this->dbConnect();
        
        $connexion = $db->prepare('INSERT INTO users_temp(name, firstname, email, password, register_date, grade) values(?, ?, ?, ?, NOW(), 0)');
        $resultat = $connexion->execute(array($name, $firstname, $email, $password));
        
        return $resultat;
    }
    
    public function getRegister() {
        $db = $this->dbConnect();
        
        $userTemp = $db->query('SELECT id, name, firstname, email, DATE_FORMAT(register_date, \'%d/%m/%Y\') AS register_date_fr FROM users_temp');
        
        return $userTemp;
    }
    
    public function deleteUserTemp($id)
    {
        $db = $this->dbConnect();
        
        $deleteMail = $db->prepare('DELETE FROM users_temp WHERE id = ?');
        $deleteMail->execute(array($id));
    
    return $deleteMail;
    }
    
    public function getEmail($email) {
        $db = $this->dbConnect();
        $connexion = $db->prepare('SELECT email FROM users WHERE email = ?');
        $connexion->execute(array($email));
        
    return $connexion;
    }
}