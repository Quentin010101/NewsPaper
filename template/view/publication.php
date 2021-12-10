<?php $title = 'Publication'; ?>
<?php $css = '../public/css/publication.css'; ?>
<?php $cssAnimation = '<link rel="stylesheet" href="../public/css/animation.css">'; ?>


<?php ob_start(); ?>

<main>
    <div class="content">
        <h1>Bonjour <span><?php if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){ echo $_SESSION['pseudo']; }; ?></span>.</h1>
        <div class="espace">
            <div class="espace-publication">
                <h2>Espace publication:</h2>
                <form action="../index.php?action=publication" method="post">
                    <div>
                        <label for="title">Titre</label>
                        <input type="text" id="title" name="title">
                    </div>
                    <div>
                        <label for="objet">Objet</label>
                        <input type="text" id="objet" name="objet">
                    </div>
                    <div>
                        <label for="photo">Photo</label>
                        <div class="container-file">
                            <label for="file"><ion-icon name="download-outline"></ion-icon>Choisir image</label>
                            <input type="file" id="file">
                        </div>
                    </div>
                    <div>
                        <label for="content">Contenu</label>
                        <textarea name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <div></div>
                        <input type="submit" value="Publier">
                    </div>
                </form>
                <h2>Aperçu:</h2>
                <div class="container-post">
                    <h3 id="titleA" ></h3>
                    <h4 id="objetA" ></h4>
                    <img id="photoA"  src="" alt="">
                    <p id="contentA" ></p>
                </div>
            </div>
            <div class="espace-post">
                <h2>Vos posts les plus récent:</h2>

            </div>
        </div>
    </div>
    <div class="diagonal">
        <div class="d1"></div>
        <div class="d2"></div>
        <div class="d3"></div>
        <div class="d4"></div>
    </div>
</main>

<script src="../public/js/publication.js"></script>


<?php $content = ob_get_clean(); ?>

<?php require_once('./template/template2.php'); ?>