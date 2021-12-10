

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href=<?php echo $css; ?>>
    <?php if(isset($cssAnimation)){ echo $cssAnimation; } ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="logo">

        </div>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
            </ul>
        </nav>
        <div class="sign">
            <?php 
            if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])):
                ?>
                <p>Bonjour : <pan><?php echo htmlspecialchars($_SESSION['pseudo']);?></pan></p>
                <a href="../index.php?action=publication"><ion-icon name="pencil-outline"></ion-icon></a>
                <?php
            else:
                ?>
                <a href="../index.php?action=connexion">Se connecter</a>
                <?php
            endif;        
            ?>    

        </div>
    </header>


    <?php echo $content; ?>


    <footer>

    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>