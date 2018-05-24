<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="public/css/stylePosts.css" />
    <link rel="stylesheet" href="public/css/styleComments.css" />
	<title><?= $title ?></title>
    </head>
    <body>
        
        <?php include 'menu.php'; $id = $post['id'];?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2 col-xl-3 bd-sidebar"></div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-6 bd-content" role="main">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?= htmlspecialchars($post['title']) ?>
                            </div>
                            <div class="panel-body">
                                <?= $post['content'] ?>
                            </div>
                        </div>    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Commentaires :
                            </div>
                            <div class="panel-body">
                                <?php
                                while ($comment = $comments->fetch())
                                {
                                ?>
                                <div class="postContent"><strong><?= htmlspecialchars($comment['author']) ?> : </strong><?= nl2br(htmlspecialchars($comment['comment'])) ?></div>
                                <?php

                                }
                                $comments->closeCursor();
                                $pdo=null;
                                ?>
                            </div> 
                        </div> 
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Ajouter un commentaire :
                            </div>
                            <div class="panel-body">
                                <form action="index.php?action=addComment&amp;id=<?= $id ?>" method="post">
                                    <div class="form-group">
                                        <label for="author">Auteur * : </label>
                                        <input type="text" id="author" name="author" required maxlength="15" placeholder="Auteur" class="form-control">
                                    </div>
                                    <div id="error_author" class="alert alert-danger" style="display: none;">
                                        Veuillez saisir un prénom.
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Commentaire * : </label>
                                        <input type="text" id="comment" name="comment" required maxlength="100" placeholder="Commentaire" class="form-control">
                                    </div>
                                    <div id="error_comment" class="alert alert-danger" style="display: none;">
                                        Veuillez saisir un commentaire.
                                    </div>
                                    <div>
                                        <button type="submit" id="btn_commentaire" class="btn btn-primary" name="btn_commentaire">Ajouter</button>
                                        * Champs obligatoires
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2 col-xl-3 bd-toc"></div>
            </div>    
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="public/bootstrap/js/bootstrap.js"></script>
        <script src="public/js/contact.js"></script>
    </body>
</html>
        
        
        