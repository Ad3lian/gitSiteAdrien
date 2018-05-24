<?php
require('controller/frontend.php');

if (isset($_GET['action'])) {
    if($_GET['action'] == 'aboutme') {
        aboutMe();
    }
    elseif ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if(isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'cv') {
        cv();
    }
    elseif ($_GET['action'] == 'addComment') {
        if(isset($_GET['id']) && $_GET['id'] > 0) {
            if(!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé pour ajouter un commentaire';
        }
    }
    elseif ($_GET['action'] == 'contact') {
            contact();
    }
    elseif ($_GET['action'] == 'addContact') {
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
            addContact($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']);
        }
        else {
            echo 'Erreur : tous les champs ne sont pas remplis !';
        }
    }
    elseif ($_GET['action'] == 'connexion') {
        if(!empty($_GET['email']) && !empty($_GET['password'])) {
            addConnexion($_GET['email'], $_GET['password']);
        }else {
            echo 'Erreur : Login et/ou password ne sont pas remplis !';
            header ("Refresh: 3;URL=index.php?action=contact");
        }
    }
    elseif ($_GET['action'] == 'inscription') {
        inscription();
    }
    elseif ($_GET['action'] == 'save_inscription') {
        save_inscription($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password']);
    }
    elseif ($_GET['action'] == 'attente_validation') {
        attente_validation();
    }
    elseif ($_GET['action'] == 'backoffice') {
        backoffice();
    }
    elseif ($_GET['action'] == 'session') {
        session();
    }
    elseif ($_GET['action'] == 'mesInformations') {
        mesInformations();
    }
    elseif ($_GET['action'] == 'page_modifier') {
        page_modifier($id);
    }
    elseif ($_GET['action'] == 'modifier_mesInfos') {
        if(!empty($_GET['id']) && !empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['email'])) {
        modifier_mesinfos($_GET['id'], $_GET['nom'], $_GET['prenom'], $_GET['email']);
        } else {
            echo "Erreur : Des informations ont disparues en cours de route";
        }
    }
    elseif ($_GET['action'] == 'boPageAjout') {
        boPageAjout();
    }
    elseif ($_GET['action'] == 'addPost') {
        if(!empty($_POST['title']) && !empty($_POST['content'])) {
        addPost($_POST['title'], $_POST['content']);
        }
    }
    elseif ($_GET['action'] == 'boPageAboutMe') {
        boPageAboutMe();
    }
    elseif ($_GET['action'] == 'modifier_monAbout') {
        var_dump($_GET['id']);var_dump($_GET['titre']);var_dump($_GET['message']);die;
        if(!empty($_GET['id']) && !empty($_GET['titre']) && !empty($_GET['message'])) {
        modifier_monAbout($_GET['id'], $_GET['titre'], $_GET['message']);
        } else {
            echo "Erreur : Des informations ont disparues en cours de route";
        }
    }
    elseif ($_GET['action'] == 'boMesPosts') {
        session_start();
        $prenom = $_SESSION['prenom'];
        boMesPosts($prenom);
    }
    elseif ($_GET['action'] == 'delete_post') {
        if(!empty($_POST['id'])) {
           delete_post($_POST['id']); 
        }
        
    }
    elseif ($_GET['action'] == 'modifier_monPost') {
        var_dump($_GET['id']);var_dump($_GET['titre']);var_dump($_GET['message']);die;
        if(!empty($_GET['id']) && !empty($_GET['titre']) && !empty($_GET['message'])) {
        modifier_monPost($_GET['id'], $_GET['titre'], $_GET['message']);
        } else {
            echo "Erreur : Des informations ont disparues en cours de route";
        }
    }
    elseif ($_GET['action'] == 'usersTemp') {
        usersTemp();
    }
    elseif ($_GET['action'] == 'delete_userTemp') {
        var_dump($_GET['id']);var_dump($_POST['id']);die;
        delete_userTemp($_GET['id']);
    }
    elseif ($_GET['action'] == 'messagerie') {
        messagerie();
    }
    elseif ($_GET['action'] == 'delete_mail') {
        delete_mail($_POST['id_messagerie']);
    }
}
else {
    listPosts();
}