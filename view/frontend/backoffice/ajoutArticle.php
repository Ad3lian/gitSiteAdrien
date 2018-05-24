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
                                    <strong>Ajouter un Article :</strong>

                                </div>
                                <div class="panel-body">
                                    <form id="formAddPost" action="index.php?action=addPost" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="title">Titre * : </label>
                                            <input type="text" id="title" name="title" required  placeholder="Titre de l'article" class="form-control">
                                        </div>
                                        <div id="error_titre" class="alert alert-danger" style="display: none;">
                                            Veuillez saisir un titre.
                                        </div>
                                        <div class="form-group">
                                            <label for="message2">Article * : </label>
                                            <textarea id="summernote" name="content" required placeholder="Corps de l'article" rows="15"></textarea>
                                        </div>
                                        <div id="error_message" class="alert alert-danger" style="display: none;">
                                            Veuillez saisir un article.
                                        </div>
                                        * : Tous les champs sont obligatoires.
                                        <div><br>
                                            <button type="submit" id="btn_addPost" name="btn_addPost" class="btn btn-primary">Publier</button>
                                        </div>
                                    </form>
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