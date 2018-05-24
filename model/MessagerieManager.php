<?php
require_once("Manager.php");

class MessagerieManager extends Manager
{
    public function getMessages()
    {
        $db = $this->dbConnect();

        $mail = $db->query('SELECT id_messagerie, name, firstname, email, message, DATE_FORMAT(email_date, \'%d/%m/%Y à %Hh%imin%ss\') AS email_date_fr FROM email ORDER BY email_date DESC');

        return $mail;
    }
    
    public function delete_mail($id_messagerie)
    {
        $db = $this->dbConnect();
        
        $deleteMail = $db->prepare('DELETE FROM email WHERE id_messagerie = ?');
        $deleteMail->execute(array($id_messagerie));
    
    return $sendMail;
    }
}