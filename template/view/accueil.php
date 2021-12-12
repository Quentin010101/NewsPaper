<?php $title = 'Home' ?>
<?php $css = '../public/css/accueil.css'; ?>

<?php ob_start(); ?>

<main id="accueil">
    <div class="container-carrousel">
        <h1>En tendance</h1>
        <div class="carrousel">
            <?php
            if(isset($requestsTendance)):
                foreach($requestsTendance as $request) :
                    ?>
                    <a href="<?php echo '../index.php?action=new&id=' . $request['id']; ?>">
                        <div class="box">
                            <div class="title">
                                <h2><?php echo $request['title']; ?></h2>
                                <h3><?php echo $request['objet']; ?></h3>
                            </div>
                            <div class="image">
                                <img src="<?php echo '../ImageArticleStockage/' . $request['photo'];?>" alt="">
                            </div>
                            <div class="content">
                                <p><?php echo $request['content']; ?></p>
                            </div>
                            <div class="view">
                                <span>Posté le: <?php echo $request['dataActu']; ?></span>
                                <span><ion-icon name="eye-outline"></ion-icon><?php echo $request['view']; ?></span>
                            </div>
                        </div>
                    </a>
                    <?php
                endforeach;
            endif;
            ?>

            <button class="button buttonL">Left</button>
            <button class="button buttonR">Right</button>

        </div>


        <script src="../public/js/carrousel.js"></script>





    </div>
    <div class="container-main">
        <div class="index">
            <button>Politique</button>
            <button>Economie</button>
            <button>Culture</button>
            <button>Cuisine</button>
        </div>
        <div class="container-type">
            <div class="politic"></div>
            <div class="economie"></div>
            <div class="culture"></div>
        </div>
    </div>
</main>



<?php $content = ob_get_clean(); ?>

<?php require_once('./template/template.php'); ?>