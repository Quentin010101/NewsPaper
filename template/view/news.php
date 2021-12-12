<?php $title = 'News' ?>
<?php $css = '../public/css/news.css'; ?>
<?php $cssAnimation = '<link rel="stylesheet" href="../public/css/animation.css">'; ?>

<?php ob_start(); ?>

<main>
    <h1><?php echo htmlspecialchars(ucwords($type)) ?></h1>

    <?php if (isset($requests) && !empty($requests)) :
        foreach ($requests as $request) :
    ?>
            <a href="<?php echo '../index.php?action=new&id=' . $request['id']; ?>">
                <div class="box-news">
                    <img src="<?php echo './ImageArticleStockage/' . $request['photo']; ?>" alt="">
                    <div>
                        <div class="titre">
                            <h2><?php echo $request['title']; ?></h2>
                            <h3><?php echo $request['objet']; ?></h3>
                        </div>
                        <div class="text">
                            <div></div>
                            <p><?php echo $request['content']; ?></p>
                        </div>
                        <div class="view">
                            <p><?php echo $request['dataActu'] . " " . $request['view'] . " view"; ?></p>
                        </div>
                    </div>
                </div>
            </a>
            <hr>
    <?php
        endforeach;
    else :
        echo 'Aucun article trouvé';
    endif;
    ?>
</main>

<?php $content = ob_get_clean(); ?>

<?php require_once('./template/template.php'); ?>