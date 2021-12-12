<?php $title = $request['title']; ?>
<?php $css = '../public/css/new.css'; ?>

<?php ob_start(); ?>

<main>
    <div class="box-news">
        <img src="<?php echo './ImageArticleStockage/' . $request['photo']; ?>" alt="">
        <div>
            <div class="titre">
                <h2><?php echo $request['title']; ?></h2>
                <h3><?php echo $request['objet']; ?></h3>
            </div>
            <div class="view">
                <p><?php echo 'Posté le : ' . $request['dataActu']; ?></p>
                <p><?php echo 'Par : ' . $pseudo['pseudo']; ?></p>
                <p><?php echo  $request['view'] . " view"; ?></p>
            </div>
            <div class="text">
                <div></div>
                <p><?php echo $request['content']; ?></p>
            </div>
        </div>
    </div>
    <div class="comment-news" >
        <div>
            <h4>Section commentaires :</h4>
        </div>
        <?php 
            if(isset($comments) && !empty($comments)) :
                foreach($comments as $comment) :     
                    ?>              
                    <div class="comments">
                            <p>Posté par : <span><?php echo htmlspecialchars($comment['pseudo'])?></span></p>
                            <p>Le : <span><?php echo htmlspecialchars($comment['date'])?></span></p>
                            <p><?php echo htmlspecialchars($comment['content'])?></p>
                            <div>
                                <div class="trait">
                                    <hr>
                                </div>
                                <div class="lien" >
                                    <a href="../index.php?action=gradeComment&idC=<?php echo $comment['id']; ?>&idA=<?php echo $request['id']; ?>" >
                                        <ion-icon name="thumbs-up-outline"></ion-icon><p><?php echo htmlspecialchars($comment['grade']); ?></p>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <?php
                endforeach;
                else: 
                ?>
                <div class="comments">
                    <p>(Aucun commentaire)</p>
                </div>    
                <?php
            endif;
            ?>
        <div class="ajout" >
            <form action="../index.php?action=comment&id=<?php echo $request['id']; ?>" method="post">
                <div>
                    <label for="text">Ajouter un commentaire :</label>
                    <div class="ajoutErreur">
                        <p><?php if(isset($erreurComment) && !empty($erreurComment)){ echo $erreurComment; } ?></p>
                    </div>
                    <textarea name="commentText" id="text" cols="30" rows="10"></textarea>
                    <input type="submit" value="Ajouter" class="button-style" >
                </div>
            </form>
        </div>
    </div>
</main>

<?php $content = ob_get_clean(); ?>

<?php require_once('./template/template.php'); ?>