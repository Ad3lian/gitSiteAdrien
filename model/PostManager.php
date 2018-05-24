<?php
require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
    $db = $this->dbConnect();
    
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr, author FROM posts ORDER BY creation_date DESC');
    
    return $req;
    }
    
    public function getMesPosts($prenom)
    {
    $db = $this->dbConnect();
    
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr, author FROM posts WHERE author = ? ORDER BY creation_date DESC');
    $req->execute(array($prenom));
    
    
    return $req;
    }
    
    public function getPost($postId)
    {
    $db = $this->dbConnect();
    
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr, author FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();
    
    return $post;
    }
    
    public function addPost($title, $content, $prenom)
    {
        $db = $this->dbConnect();
        
        $req = $db->prepare('INSERT INTO posts (title, content, creation_date, author) values(?, ?, NOW(), ?)');
        $req->execute(array($title, $content, $prenom));

    return $req;
    }
    
    public function setmonPost($id, $title, $content) {
        $db = $this->dbConnect();
        
        $monPost = $db->prepare('UPDATE posts SET title=?, content=? WHERE id=?');
        $monPost->execute(array($title, $content, $id));
        
        return $monPost;
    }
    
    public function delete_post($id) {
        $db = $this->dbConnect();
        
        $monPost = $db->prepare('DELETE FROM posts WHERE id=?');
        $monPost->execute(array($id));
        
        return $monPost;
    }
}
