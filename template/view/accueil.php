<?php $title = 'Home' ?>
<?php $css = '../public/css/accueil.css'; ?>

<?php ob_start(); ?>

<main id="accueil">
    <div class="container-carrousel">
        <h1>En tendance</h1>
        <div class="carrousel">
            <div class="box">
                <div class="title">
                    <h2>Lorem, ipsum.</h2>
                </div>
                <div class="image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/BBC_News_2019.svg/220px-BBC_News_2019.svg.png" alt="">
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea accusamus praesentium tempora? Consectetur, quisquam at quos odit nostrum laborum?</p>
                    <span>View 36</span>
                </div>
            </div>
            <div class="box">
                <div class="title"></div>
                <div class="image"></div>
                <div class="content"></div>
            </div>
            <div class="box">
                <div class="title">3</div>
                <div class="image"></div>
                <div class="content"></div>
            </div>
            <div class="box">
                <div class="title">4</div>
                <div class="image"></div>
                <div class="content"></div>
            </div>
            <div class="box">
                <div class="title">5</div>
                <div class="image"></div>
                <div class="content"></div>
            </div>
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