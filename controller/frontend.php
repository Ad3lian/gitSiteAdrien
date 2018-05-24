<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/AboutMeManager.php');
require_once('model/ContactManager.php');
require_once('model/ConnexionManager.php');
require_once('model/MessagerieManager.php');
require_once('model/RegisterManager.php');

function aboutMe()
{
    $aboutMeManager = new AboutMeManager();
    $aboutMe = $aboutMeManager->getAboutMe();
    
    require('view/frontend/aboutMe.php');
}

function listPosts() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    
    require('view/frontend/listPostsView.php');
}

function post() {
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    
    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment) {
    $commentManager = new CommentManager();
    
    $affectedLines = $commentManager->postComment($postId, $author, $comment);
    
    if($affectedLines === false) {
        echo 'Impossible d\'ajouter le commentaire !';
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function cv() {
    require('view/frontend/cv.php');
}

function contact() {
    require('view/frontend/contact.php');
}

function addContact($name, $firstname, $email, $message) {
    $mailManager = new ContactManager();
    $addMail = $mailManager->addMail($name, $firstname, $email, $message);
    
    if($addMail === false) {
        echo 'Impossible d\'ajouter votre message !';
        echo 'Vous allez être redirigé vers la page contact dans 3 secondes.<br>';
        header ("Refresh: 3;URL=index.php?action=contact");
    }
    else {
        echo 'Message envoyé !<br>';
        echo 'Vous allez être redirigé vers l\'accueil dans 3 secondes.<br>';
        header ("Refresh: 3;URL=index.php");
    }
}

function inscription() {
    require('view/frontend/inscription.php');
}

function save_inscription($name, $firstname, $email, $password) {
    $test = new RegisterManager();
    $testEmail = $test->getEmail($email);

    if (testEmail === false) {
        echo 'Impossible de vous inscrire, votre adresse mail est peut-être déjà dans la base de données!';
        echo 'Vous allez être redirigé dans 5 secondes.<br>';
        header ("Refresh: 5;URL=index.php?action=inscription");
    }else{
        $pass_hache = password_hash($password, PASSWORD_DEFAULT);
        $reg = new RegisterManager();
        $register = $reg->setRegister($name, $firstname, $email, $pass_hache);
        echo 'Inscription réussie!<br>';
        echo 'Vous allez être redirigé dans 3 secondes.<br>';
        header ("Refresh: 3;URL=index.php?action=attente_validation");
    }
}

function attente_validation() {
    require('view/frontend/attenteValidation.php');
}

function addConnexion($email, $password){
    $pass_hache = password_hash($password, PASSWORD_DEFAULT);
    
    $cnx = new ConnexionManager();
    $resultat = $cnx->getConnexion($email, $pass_hache);
    
    if (!resultat) {
        echo 'Impossible de vous connecter!';
        echo 'Veuillez vérifier vos identifiants !';
        echo 'Vous allez être redirigé vers la page connexion dans 3 secondes.<br>';
        header ("Refresh: 3;URL=index.php?action=connexion");
    }
    else {
            session_start();
            $_SESSION['email'] = $email;   
        header ("Refresh: 0;URL=index.php?action=session");
    }
}

function session() {
    $ses = new ConnexionManager();
    $resultat = $ses->getInfo();
    
    session_start();
    $_SESSION['prenom'] = $resultat[2];
    header ("Refresh: 0;URL=index.php?action=backoffice");
}

function deconnexion() {
    session_destroy();
    echo 'Vous etes déconnecté !<br>';
    echo 'Vous allez être redirigé vers l\'accueil dans 3 secondes.<br>';
    header ("Refresh: 0;URL=index.php");
    
    //supression des cookies de connexion automatique
    //setcookie('login', '');
    //setcookie('pass_hache', '');
}

function backoffice() {
    require('view/frontend/backoffice/backoffice.php');
}

function mesInformations() {
    session_start();
    $email = $_SESSION['email'];
    
    $infos = new ConnexionManager();
    $mesInfos = $infos->getInfo();
    
    require('view/frontend/backoffice/mesInformations.php');
}

function modifier_mesinfos($id, $nom, $prenom, $email) {
    $infos = new ConnexionManager();
    $mesInfos = $infos->setMesInfos($nom, $prenom, $email, $id);
    
    header ("Refresh: 0;URL=index.php?action=mesInformations");
}

function boPageAjout() {
    require('view/frontend/backoffice/ajoutArticle.php');
}

function addPost($title, $content) {
    session_start();
    $prenom = $_SESSION['prenom'];
    
    $ajout = new PostManager();
    $ajout_article = $ajout->addPost($title, $content, $prenom);
    
    if (!ajout_article) {
        echo 'Impossible d\'ajouterl\'article pour le moment!';
        echo 'Vous allez être redirigé dans 3 secondes.<br>';
        header ("Refresh: 3;URL=index.php?action=boPageAjout");
     }
     else {  
        echo 'Réussite de l\'ajout de l\'article!<br>';
        echo 'Vous allez être redirigé dans 3 secondes.<br>';
        header ("Refresh: 0;URL=index.php?action=backoffice");
     }
}
function boPageAboutMe() {
    $aboutMeManager = new AboutMeManager();
    $AboutMe = $aboutMeManager->getAboutMe();
    
    require('view/frontend/backoffice/manager_AboutMe.php');
}
function modifier_monAbout($id, $titre, $message) {
    $postManager = new AboutMeManager();
    $Posts = $postManager->setmonAbout($id, $titre, $message);
    
    header ("Refresh: 0;URL=index.php?action=boPageAboutMe");
}
function boMesPosts($prenom) {
    $postManager = new PostManager();
    $Posts = $postManager->getMesPosts($prenom);
    
    require('view/frontend/backoffice/mesPublications.php');
}
function page_modifier($id) {
    $monAboutManager = new AboutMeManager();
    $about = $monAboutManager->getmonAbout($id);
    
    require('view/frontend/backoffice/modifier_AboutMe.php');
}
function modifier_monPost($id, $titre, $message) {
    $postManager = new PostManager();
    $Posts = $postManager->setmonPost($id, $titre, $message);
    
    header ("Refresh: 0;URL=index.php?action=mesPublications");
}

function delete_post($id) {
    $postManager = new PostManager();
    $delete_post = $postManager->delete_post($id);
    
    header ("Refresh: 0;URL=index.php?action=backoffice");
}


function usersTemp() {
    $userTemp = new RegisterManager();
    $usersTemp = $userTemp->getRegister();
    
    require('view/frontend/backoffice/usersTemp.php');
}

function delete_userTemp($id) {
    $delete = new RegisterManager();
    $delete_userTemp = $delete->deleteUserTemp($id);
    if (!delete_userTemp) {
        echo 'Impossible de supprimer l\'inscription temporaire pour le moment!';
        echo 'Vous allez être redirigé dans 3 secondes.<br>';
        header ("Refresh: 3;URL=index.php?action=usersTemp");
     }
     else {  
        header ("Refresh: 0;URL=index.php?action=usersTemp");
     }
    
}

function messagerie() {
    $messagerie = new MessagerieManager();
    $messages = $messagerie->getMessages();
    
    require('view/frontend/backoffice/messagerie.php');
}

function delete_mail($id_messagerie) {
    $delete = new MessagerieManager();
    $delete_mail = $delete->delete_mail($id_messagerie);
    if (!delete_mail) {
        echo 'Impossible de supprimer le mail pour le moment!';
        echo 'Vous allez être redirigé dans 3 secondes.<br>';
        header ("Refresh: 3;URL=index.php?action=messagerie");
     }
     else {  
        header ("Refresh: 0;URL=index.php?action=messagerie");
     }
}