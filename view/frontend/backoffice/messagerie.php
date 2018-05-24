<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/styleAbout.css" />
        <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css" />
	    <link rel="stylesheet" href="public/css/stylePosts.css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <title>Back-office - messagerie</title>
    </head>
    <body>
        <?php include 'menu2.php'; ?>
        <div class="container-fluid">
            <div class="row sous-menu">
                <div class="col-5 col-md-4 col-lg-3 col-xl-1 bd-sidebar">
                    <?php include 'navBar.php'; ?>
                </div>
                <div class="col-6  col-md-8 col-lg-8 col-xl-8 bd-content" role="main">
                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <strong>Derniers courriers :</strong>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        while ($data = $messages->fetch())
                                        {
                                        ?>
                                        <div class="row">
                                            <div class="col-9 col-md-9 col-lg-9 col-xl-9">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        Le <?= $data['email_date_fr'] ?> :
                                                    </div>
                                                    <div class="panel-body">
                                                        <strong>Nom : <?= $data['firstname'] ?> <?= $data['name'] ?> </strong><br>
                                                        Email : <?= $data['email'] ?><br>
                                                        Message : <?= $data['message'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 col-xl-3">
                                                <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#demo<?= $data['id_messagerie'] ?>" aria-expanded="false">Supprimer</button><br><br>
                                                <button class="btn btn-primary" type="button" >Répondre</button><br><br>
                                                <div id="demo<?= $data['id_messagerie'] ?>" class="collapse"
                                                aria-expanded="true" style="">
                                                    <form action="index.php?action=delete_mail" method="POST">
                                                        <input type="text" id="id_messagerie" name="id_messagerie" style="display: none ;" value="<?= $data['id_messagerie'] ?>">
                                                    Confirmer suppression ?
                                                    <button id="delete_mail" class="btn btn-danger" type="submit" value="<?= $data['id_messagerie'] ?>">Supprimer</button>
                                                    <button class="btn btn-primary" type="button" >Annuler</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        $messages->closeCursor();
                                        $pdo=null;
                                        ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-12 col-md-2 col-lg-2 col-xl-3 bd-toc"></div>
            </div>    
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <script src="public/bootstrap/js/bootstrap.js"></script>
        <script src="public/js/bo.js"></script>
    </body>
</html>