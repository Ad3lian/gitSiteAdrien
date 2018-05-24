<!-- Menu -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?action=aboutme">
                <span class="blue">Adrien</span>Martin
            </a>
        </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?action=aboutme">Accueil</a></li>
                <li><a href="index.php">Blog</a></li>
                <li><a href="index.php?action=cv">CV</a></li>
                <li><a href="index.php?action=contact">Contact</a></li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <span class="glyphicon glyphicon-log-in" style="color:#446CB3;"> Connexion</span>
                    </a>
                </li>
            </ul>
            
    </div>    
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span ara-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">CONNEXION</h4>
            </div>
            
            <div class="modal-body">
                <form id="form_connexion" action="index.php?action=connexion" method="POST">
                    <h4>Vous avez un compte administrateur ? C'est par ici :</h4>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="text" id="email" name="email" required maxlength="255" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe : </label>
                        <input type="password" id="password" name="password" required class="form-control">
                    </div>
                    <div>
                        <a href="index.php?action=inscription">Pas encore inscrit ? C'est par là !</a>
                    </div><br>
                    <button type="submit" id="btn_connexion" class="btn btn-primary" name="btn_connexion" data-dismiss="modal">
                    <span class="glyphicon glyphicon-log-in"> Connexion</span></button>
                </form>
            </div>
            <div class="modal-footer"></div>
            
        </div>

    </div>
</div>