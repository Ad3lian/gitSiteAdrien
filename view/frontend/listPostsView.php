<?php $title = 'Adrien MARTIN - Blog'; ?>

<?php ob_start();
    while($data = $posts->fetch())
    {
    ?>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= htmlspecialchars($data['title']) ?>
                </div>
                <div class="panel-body">
                    <div>
                        <?= $data['content'] ?>
                    </div>
                    <div>
                        Crée le <?= $data['creation_date_fr'] ?> <br/>
                        par <?= htmlspecialchars($data['author']) ?> <br><br/>
                        <span class="blue">
                            <a href="index.php?action=post&id=<?= $data['id'] ?>">
                            Commentaires</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php		
    }
$posts->closeCursor();
    ?>
        <?php $content = ob_get_clean(); 
        $pdo=null; ?>
    
        <?php require('postsTemplate.php'); ?>