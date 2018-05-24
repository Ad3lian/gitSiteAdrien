<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="public/css/stylePosts.css" />
    <link rel="stylesheet" href="public/css/styleContact.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Contact</title>
    </head>
    <body>
        <?php include 'menu.php'; ?>
        <!--   CONTENT     -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2 col-xl-3 bd-sidebar"></div>
                
                <div class="col-12 col-md-8 col-xl-8 bd-content" role="main">
<!--     RESEAUX SOCIAUX        -->
                    
                    <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Réseaux sociaux :
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-12" style="padding-left: 20px;">
                                            Vous pouvez me retrouver sur les réseaux sociaux suivant :
                                        </div>    
                                    </div><br>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <a href="https://www.linkedin.com/in/adrien-martin-11884589" class="btn btn-info btn-lg btn-block" role="button">
                                                Linked<i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
                                        </div>    
                                        <div class="form-group col-md-4">
                                            <a href="http://fr.viadeo.com/fr/profile/adrien.martin6" role="button" class="btn btn-warning btn-lg btn-block"><i class="fa fa-viadeo-square" style="font-size:24px"></i>Viadeo</a>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <a href="https://www.facebook.com/Power.rangeur" role="button" class="btn btn-primary btn-lg btn-block">
                                                <i class="fa fa-facebook-official" style="font-size:24px"></i>acebook
                                            </a>
                                        </div>
    <!--
                                        <div class="form-group col-md-3">
                                            <a href="" role="button" class="btn btn-danger btn-lg btn-block">Google</a>
                                        </div>
-->
                                    </div>
                                    
                                </div>    
                            </div>  
                        </div>
                    
<!--     CONTACT           -->
                    
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Contact:
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-12" style="padding-left: 20px;">
                                            Si vous préfèrez me laisser un message directement, c'est ici :
                                        </div>    
                                    </div><br>
                    
                                    <form action="index.php?action=addContact" method="post">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                    <label for="nom">Nom * : </label>
                                                    <input type="text" id="nom" name="nom" required maxlength="30" placeholder="Nom" class="form-control">
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                    <label for="prenom">Prénom * : </label>
                                                    <input type="text" id="prenom" name="prenom" required maxlength="30" placeholder="Prénom" class="form-control">
                                            </div>
                                            
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
                                            <input type="text" id="email" name="email" required  placeholder="Email" class="form-control">
                                        </div>
                                        <div id="error_email" class="alert alert-danger" style="display: none;">
                                            Veuillez saisir une adresse email.
                                        </div>
                                        <div id="error_email2" class="alert alert-danger" style="display: none;">
                                            Veuillez saisir correctement l'email.
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message * : </label>
                                            <textarea id="message" name="message" required placeholder="Votre message ici" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div id="error_message" class="alert alert-danger" style="display: none;">
                                            Veuillez saisir un message.
                                        </div>
                                        * : Tous les champs sont obligatoires.
                                        <div><br>
                                            <button type="submit" id="btn_contact" name="btn_contact" class="btn btn-primary">Envoyer</button>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                <div class="col-12 col-md-2 col-xl-2 bd-toc"></div>
            </div>
        </div>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="public/bootstrap/js/bootstrap.js"></script>
        <script src="public/js/contact.js"></script>
    </body>
</html>