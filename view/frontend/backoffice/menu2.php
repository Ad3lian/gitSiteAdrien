<?php session_start(); ?>

<!-- Menu -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        
            <div class="navbar-brand"> 
                <a href="index.php?action=backoffice">Bonjour <span class="blue"> <?= " " . $_SESSION['prenom']; ?></span></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal_deco">
                        <span class="glyphicon glyphicon-log-out " style="color:#446CB3;"> Déconnexion</span>
                    </a>
                </li>
            </ul>
            
    </div>    
</div>

<!-- Modal -->
<div id="myModal_deco" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span ara-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">DECONNEXION</h4>
            </div>
            
            <div class="modal-body">
                <form id="form_cnx">
                    <h4>Êtes vous sur de vouloir vous déconnecter ?</h4><br>
                    <button type="button" id="btn_annuler" class="btn btn-secondary" name="btn_annuler" data-dismiss="modal">Annuler</button>
                    <button type="button" id="btn_deconnexion" class="btn btn-primary" name="btn_deconnexion" data-dismiss="modal">
                    <span class="glyphicon glyphicon-log-out"> Déconnexion</span></button>
                </form>
            </div>
            <div class="modal-footer"></div>
            
        </div>

    </div>
</div>