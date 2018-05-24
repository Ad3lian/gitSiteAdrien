<?php
require_once("model/Manager.php");

class ContactManager extends Manager
{
    public function addMail($name, $firstname, $email, $message)
    {
    $db = $this->dbConnect();
    $sendMail = $db->prepare('INSERT INTO email (name, firstname, email, message, email_date) values(?, ?, ?, ?, NOW())');
    $sendMail->execute(array($name, $firstname, $email, $message));
    
    return $sendMail;
    }
}