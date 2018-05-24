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
        <title>Back-office</title>
    </head>

    <body>
        <?php include 'menu2.php'; ?>
            <div class="container-fluid">
                <div class="row sous-menu">
                    <div class="col-5 col-md-4 col-lg-3 col-xl-1 bd-sidebar" data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                        <?php include 'navBar.php'; ?>
                    </div>
                    <div class="col-7 col-md-8 col-lg-8 col-xl-6 bd-content" role="main">
                        <div>
                            <h1 class="display-1">Bienvenue dans l'espace Administration</h1> </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="public/bootstrap/js/bootstrap.js"></script>
            <script src="public/js/bo.js"></script>
    </body>

    </html>