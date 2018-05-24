<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css" />    
	<link rel="stylesheet" href="public/css/stylePosts.css" />
        <link rel="stylesheet" href="public/css/styleAbout.css" />
        <title>About Me</title>
    </head>
    <body>
<!--   MENU     -->
        <?php include 'menu.php'; ?>
<!--   PANORAMA     -->
        <div id ="panorama">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="d-block w-100" data-src="First slide" src='public/images/meeting.jpg' alt="First slide" data-holder-rendered="true">
                    </div>
                    <div class="item">
                        <img class="d-block w-100" data-src="Second slide" src='public/images/laptop.jpg' alt="Second slide" data-holder-rendered="true">
                    </div>
                    <div class="item">
                        <img class="d-block w-100" data-src="Third slide" src='public/images/coffee.jpg' alt="Third slide" data-holder-rendered="true">
                    </div>
                </div>
            </div>
        </div>
<!--   CONTENT     -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-2 col-xl-3 bd-sidebar"></div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-6 bd-content" role="main">
                    <?php
                    while ($aboutme = $aboutMe->fetch())
                    {
                    ?>
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?= $aboutme['title'] ?>
                                </div>
                                <div class="panel-body">
                                    <?= $aboutme['content'] ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    $i++;
                    }
                    $aboutMe->closeCursor();
                    $pdo=null;
                    ?>
                </div>
                <div class="col-12 col-md-2 col-lg-2 col-xl-3 bd-toc"></div>
            </div>    
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="public/bootstrap/js/bootstrap.js"></script>
        <script src="public/js/contact.js"></script>
    </body>
</html>
