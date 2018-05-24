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
        <title>Back-office - Mes informations</title>
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
                                <strong>Mes informations :</strong>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-9 col-md-9 col-lg-9 col-xl-9">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Nom : <?= $mesInfos['name'] ?><br>
                                                Prénom : <?= $mesInfos['firstname'] ?><br>
                                                Email : <?= $mesInfos['email'] ?><br>
                                                Inscrit depuis le : <?= $mesInfos['register_date_fr'] ?><br>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-3 col-lg-3 col-xl-3">
                                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#modifier_mesinfosDiv" aria-expanded="false" >Modifier</button>
                                        </div>
                                    </div>
                                    <div class="collapse" class="collapse" id="modifier_mesinfosDiv" aria-expanded="true" style="">
                                        <div class="row">
                                            <div class="col-9 col-md-9 col-lg-9 col-xl-9">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                    </div>
                                                    <div class="panel-body">
                                                        <form action="index.php?action=modifier_mesInfos" method="POST">
                                                            <div class="form-group ">
                                                                <label for="nom">Nom * : </label>
                                                                <input type="text" id="nom" name="nom" required maxlength="35" placeholder="Nom" value="<?= $mesInfos['name'] ?>" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                    <label for="prenom">Prénom * : </label>
                                                                    <input type="text" id="prenom" name="prenom" required maxlength="35" placeholder="Prénom" value="<?= $mesInfos['firstname'] ?>" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email * : </label>
                                                                <input type="text" id="email" name="email" required placeholder="Email" maxlength="255" value="<?= $mesInfos['email'] ?>" class="form-control">
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>                                             
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 col-xl-3"> 
                                                <form action="index.php?action=modifier_mesInfos" method="POST">
                                                    <button id="modifier_mesInfos" class="btn btn-danger" type="button" value="<?= $mesInfos['id'] ?>">Confirmer</button>
                                                </form>
                                            </div>
                                        </div>        
                                    </div>
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