<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/template.css">
    <link rel="stylesheet" href=<?php echo $css; ?>>
    <?php if (isset($cssAnimation)) {
        echo $cssAnimation;
    } ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="header-wrapper">
        <header>
            <div class="logo">

            </div>
            <nav>
                <div class="form" ></div>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php?action=news&type=politique">Politique</a></li>
                    <li><a href="../index.php?action=news&type=economie">Economie</a></li>
                    <li><a href="../index.php?action=news&type=culture">Culture</a></li>
                    <li><a href="../index.php?action=news&type=cuisine">Cuisine</a></li>
                </ul>
            </nav>
            <div class="sign">
                <?php
                if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) :
                ?>
                    <p>Bonjour : <span><?php echo htmlspecialchars($_SESSION['pseudo']); ?></span></p>
                    <?php if (isset($_SESSION['status']) && !empty($_SESSION['status'])) {
                        if ($_SESSION['status'] == '2' || $_SESSION['status'] == '3') {
                    ?>
                            <a class="a" href="../index.php?action=publication">
                                <ion-icon name="pencil-outline"></ion-icon>
                            </a>
                            <a class="a" href="../index.php?action=accueil&item=destroy">
                                <ion-icon name="power-outline"></ion-icon>
                            </a>
                    <?php
                        }
                    } ?>
                <?php
                else :
                ?>
                    <a class="login" href="../index.php?action=connexion">Se connecter</a>
                <?php
                endif;
                ?>

            </div>
        </header>
    </div>


    <?php echo $content; ?>


    <footer>

    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>