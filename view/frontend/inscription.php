<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="public/css/stylePosts.css" />
	<link rel="stylesheet" href="public/css/styleContact.css" />
	<title>Inscription</title>
    </head>
    <body>
        <?php include 'menu.php'; ?>
        
        <!--   CONTENT     -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2 col-xl-3 bd-sidebar"></div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-6 bd-content" role="main">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Inscription : 
                            </div>
                            <div class="panel-body">
                                <form id="form_inscription" action="index.php?action=save_inscription" method="POST">
                                        <div class="form-group ">
                                                <label for="nom">Nom * : </label>
                                                <input type="text" id="ins_nom" name="nom" required maxlength="35" placeholder="Nom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label for="prenom">Prénom * : </label>
                                                <input type="text" id="ins_prenom" name="prenom" required maxlength="35" placeholder="Prénom" class="form-control">
                                        </div>
                                            <div id="error_nom" class="alert alert-danger" style="display: none;">
                                                    Veuillez saisir un nom.
                                            </div>
                                            <div id="error_prenom" class="alert alert-danger" style="display: none;">
                                                    Veuillez saisir un prénom.
                                            </div>
                                            <div id="error_nom_prenom" class="alert alert-danger" style="display: none;">
                                                    Veuillez saisir un nom et un prénom.
                                            </div>
                                        <div class="form-group">
                                            <label for="email">Email * : </label>
                                            <input type="text" id="ins_email" name="email" required placeholder="Email" class="form-control">
                                        </div>
                                    <div id="error_email" class="alert alert-danger" style="display: none;">
                                                Veuillez saisir un email.
                                    </div>
                                    <div id="error_email2" class="alert alert-danger" style="display: none;">
                                            Veuillez saisir correctement l'email.
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="password">Mot de passe * : </label>
                                        <input type="password" id="ins_password" name="password" required maxlength="12" placeholder="Mot de passe" class="form-control">
                                    </div>
                                    <div id="error_password" class="alert alert-danger" style="display: none;">
                                                Veuillez saisir un mot de passe.
                                    </div>
                                    <div>
                                        <button type="submit" id="btn_inscription" class="btn btn-primary" name="btn_inscription">Inscription</button>
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