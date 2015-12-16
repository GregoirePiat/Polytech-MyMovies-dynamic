<!DOCTYPE html>
<html lang="fr">

<?php include "includes/head.php";?>

    <body>

        <?php include "includes/nav.php"; ?>

            <div class="container">

                <?php
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=mymovies;charset=utf8', 'mymovies_user', 'secret');
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        
        try{
            $response = $bdd->query('SELECT * FROM movie;');
            while ($datas = $response->fetch())
            {
                echo('<div class="col-md-11">');
                echo('<h2><a href="movie.php?id='.$datas['mov_id'].'">');
                echo $datas['mov_title'];
                echo('</a></h2>');
                echo('<p>');
                echo $datas['mov_description_short'];
                echo('</p>');
                echo('</div>');
            }
            
        }
        catch(Exception $errorRequest){
            die('Erreur : ' . $e->getMessage());
        }
        
        
        
        ?>
            </div>


            <?php include("includes/footer.php"); ?>)

</html>