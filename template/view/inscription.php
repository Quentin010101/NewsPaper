<?php $title = 'Inscription'; ?>
<?php $css = '../public/css/inscriptionConnexion.css'; ?>

<?php ob_start(); ?>

<main>
    <div id="form-inscription" class="container-form">
        <h1>World News</h1>
        <form  action="../index.php?action=inscription" method="post">
            <h2>Inscription</h2>
            <div>
                <label for="pseudoI">Pseudo</label>
                <input type="text" id="pseudoI" name="pseudoI" placeholder="Pseudo">
                <p></p>
            </div>
            <div>
                <label for="emailI">Email</label>
                <input type="email" id="emailI" name="emailI" placeholder="Email">
                <p></p>
            </div>
            <div>
                <label for="passwordI">Password</label>
                <input type="password" id="passwordI" name="passwordI" placeholder="Password">
                <p></p>
            </div>
            <div>
                <label for="passwordIC">Password Confirmed</label>
                <input type="password" id="passwordIC" name="passwordIC" placeholder="Password">
                <p></p>
            </div>
            <div class="radio">
                <div>
                    <input type="radio" id="radio1" name="statusI" value="1" checked>
                    <label for="radio1">Lecteur</label>
                </div>
                <div>
                    <input type="radio" id="radio2" name="statusI" value="2">
                    <label for="radio2">Chroniqueur</label>
                </div>
            </div>
            <div>
                <input type="submit" value="Valider">
            </div>
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