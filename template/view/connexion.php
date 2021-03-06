<?php $title = 'Connexion'; ?>
<?php $css = '../public/css/inscriptionConnexion.css'; ?>
<?php $cssAnimation = '<link rel="stylesheet" href="../public/css/animation.css">'; ?>


<?php ob_start(); ?>

<main>
    <div class="container-form">
        <h1>World News</h1>
        <form action="../index.php?action=connexion" method="post">
            <h2>Connexion</h2>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email">
                <p></p>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
                <p></p>
            </div>
            <div>
                <input type="submit" value="Valider">
            </div>
            <a href="../index.php?action=inscription">Vous n'avez pas encore de compte?</a>
        </form>
    </div>
    <div class="diagonal">
        <div class="d1"></div>
        <div class="d2"></div>
        <div class="d3"></div>
        <div class="d4"></div>
    </div>
</main>

<?php $content = ob_get_clean(); ?>

<?php require_once('./template/template2.php'); ?>