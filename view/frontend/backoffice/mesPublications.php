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
        <title>Back-office - Ajouter un Article</title>
    </head>
    <body>
        <?php include 'menu2.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-5 col-md-4 col-lg-3 col-xl-1 bd-sidebar">
                    <?php include 'navBar.php'; ?>
                </div>
                <div class="col-6  col-md-8 col-lg-8 col-xl-8 bd-content" role="main">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>Mes publications :</strong>

                                </div>
                                <div class="panel-body">
                                    <?php
                                    while($MesPosts = $Posts->fetch())
                                    {
                                    ?>
                                        <div class="row">
                                            <div class="col-9 col-md-9 col-lg-9 col-xl-9">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                    <?= htmlspecialchars($MesPosts['title']) ?>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div>
                                                            <?= $MesPosts['content'] ?>
                                                        </div><br>
                                                        <div>
                                                            Crée le <?= $MesPosts['creation_date_fr'] ?> <br/>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 col-xl-3">
                                                <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#demo<?= $MesPosts['id'] ?>" aria-expanded="false">Supprimer</button><br><br>  
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#modifier_monPost<?= $MesPosts['id'] ?>" aria-expanded="false">Modifier</button><br><br>
                                                <div id="demo<?= $MesPosts['id'] ?>" class="collapse"
                                                aria-expanded="true" style="">
                                                    <form action="index.php?action=delete_post" method="POST">
                                                    Confirmer suppression ?
                                                        <input type="hidden" name="id" value="<?= $MesPosts['id'] ?>">
                                                    <button id="delete_post" class="btn btn-danger" type="submit" value="<?= $MesPosts['id'] ?>">Supprimer</button>
                                                    <button class="btn btn-primary" type="button" >Annuler</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="collapse" class="collapse" id="modifier_monPost<?= $MesPosts['id'] ?>" aria-expanded="true" style="">
                                        <div class="row">
                                            <div class="col-9 col-md-9 col-lg-9 col-xl-9">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                    </div>
                                                    <div class="panel-body">
                                                        <form action="index.php?action=modifier_monPost" method="POST">
                                                            <div class="form-group ">
                                                                <label for="nom">Titre * : </label>
                                                                <input type="text" id="titre" name="titre" required maxlength="35" placeholder="Titre" value="<?= htmlspecialchars($MesPosts['title']) ?>" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message">Message * : </label>
                                                                <textarea id="message" name="message" required placeholder="Message" class="form-control" rows="15"><?= $MesPosts['content'] ?></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>                                             
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 col-xl-3"> 
                                                <form action="index.php?action=modifier_mesInfos" method="POST">
                                                    <button id="modifier_momPost" class="btn btn-danger" type="button" value="<?= $MesPosts['id'] ?>">Confirmer</button>
                                                </form>
                                            </div>
                                        </div>        
                                    </div>
                                    <?php		
                                    }
                                    $Posts->closeCursor();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2 col-xl-2 bd-toc"></div>
            </div>    
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <script src="public/bootstrap/js/bootstrap.js"></script>
        <script src="public/js/bo.js"></script>
    </body>
</html>