<?php
require_once("model/Manager.php");

class AboutMeManager extends Manager{
    public function getAboutMe()
    {
        $db = $this->dbConnect();
        
        $abouts = $db->query('SELECT * FROM about');
        
        return $abouts;
    }
    public function getmonAbout($id)
    {
        $db = $this->dbConnect();
        
        $about = $db->prepare('SELECT id, title, content FROM about WHERE id=?');
        $about->execute(array($id));
        
        return $about;
    }
    public function setmonAbout($id, $titre, $content)
    {
        $db = $this->dbConnect();
        
        $monPost = $db->prepare('UPDATE about SET title=?, content=? WHERE id=?');
        $monPost->execute(array($title, $content, $id));
    }
}
