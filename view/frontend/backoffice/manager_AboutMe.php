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
        <title>Back-office - About Me</title>
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
                                    <strong>Présentation AboutMe :</strong>

                                </div>
                                <div class="panel-body">
                                    <?php
                                    while($About = $AboutMe->fetch())
                                    {
                                    ?>
                                        <div class="row">
                                            <div class="col-9 col-md-9 col-lg-9 col-xl-9">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                    <?= htmlspecialchars($About['title']) ?>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div>
                                                            <?= $About['content'] ?>
                                                        </div><br>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-3 col-lg-3 col-xl-3">
                                                <form>
                                                    <input type="hidden" value="<?= $About['id'] ?>">
                                                </form>
                                                <button class="btn btn-primary modifier_page" type="button" value="<?= $About['id'] ?>">Modifier</button><br><br>
                                            </div>
                                        </div>
                                    <?php		
                                    }
                                    $AboutMe->closeCursor();
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