<?php $title = 'Publication'; ?>
<?php $css = '../public/css/publication.css'; ?>
<?php $cssAnimation = '<link rel="stylesheet" href="../public/css/animation.css">'; ?>


<?php ob_start(); ?>

<main>
    <div class="content">
        <div class="nav">
            <h1>Bonjour <span><?php if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) {
                                    echo $_SESSION['pseudo'];
                                }; ?></span>.</h1>
            <div class="setting">
                <a href="../index.php" class="button-style" >
                    <ion-icon name="arrow-back-outline"></ion-icon>
                </a>
                <a href="../index.php?action=accueil&item=destroy" class="button-style" >
                    <ion-icon name="power-outline"></ion-icon>
                </a>
            </div>
        </div>
        <div class="espace">
            <div class="espace-publication">
                <h2>Espace publication:</h2>
                <form action="../index.php?action=publication" method="post" enctype="multipart/form-data">
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
                            <label for="file">
                                <ion-icon name="download-outline"></ion-icon>Choisir image
                            </label>
                            <input type="file" id="file" name="file">
                        </div>
                    </div>
                    <div>
                        <p></p>
                        <p class="photo-erreur" ><?php if (isset($erreur) && !empty($erreur)) {
                                echo $erreur;
                            } ?></p>
                    </div>
                    <div>
                        <label for="type">Type</label>
                        <div class="container-radio" >
                            <div class="box-radio">
                                <input type="radio" name="type" id="Politique" value="politique" >
                                <label for="Politique">Politique</label>
                            </div>
                            <div class="box-radio">
                                <input type="radio" name="type" id="Economie" value="economie">
                                <label for="Economie">Economie</label>
                            </div>
                            <div class="box-radio">
                                <input type="radio" name="type" id="Culture" value="culture">
                                <label for="Culture">Culture</label>
                            </div>
                            <div class="box-radio">
                                <input type="radio" name="type" id="Cuisine" value="cuisine">
                                <label for="Cuisine">Cuisine</label>
                            </div>
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
                    <h3 id="titleA"></h3>
                    <hr>
                    <h4 id="objetA"></h4>
                    <img id="photoA" src="#" alt="">
                    <p id="contentA"></p>
                </div>
            </div>
            <div class="espace-post">
                <h2>Vos posts les plus récent:</h2>
                <?php
                if (isset($requests)) :
                    foreach ($requests as $request) :
                ?>
                        <div>
                            <p><?php echo $request['title'] . " (" . $request['objet'] . ")"; ?></p>
                            <p>Posté le: <?php echo $request['dataActu']; ?> <a href="../index.php?action=publication&item=delete&id=<?php echo $request['id']; ?>">Suprimer</a></p>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
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