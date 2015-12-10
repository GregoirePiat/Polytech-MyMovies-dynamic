<!DOCTYPE html>
<html lang="fr">

<?php include 'includes/head.php';?>

    <body>
        <?php include 'includes/nav.php';?>

            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <?php
                        
                        if(isset($_GET['id']) && is_numeric($_GET['id'])){
                            $idFilm = $_GET['id'];
                                try{
                                    $bdd = new PDO('mysql:host=localhost;dbname=mymovies;charset=utf8', 'mymovies_user', 'secret');
                                }
                                catch(Exception $e){
                                    die('Erreur : ' . $e->getMessage());
                                }

                                try{
                                    $response = $bdd->query('SELECT * FROM movie WHERE mov_id='.$idFilm.';');
                                    while ($datas = $response->fetch())
                                    {
                                        echo('<div class="col-xs-6 col-sm-4">');
                                        echo('<a href="#" class="thumbnail">');
                                        echo('<img src="images/'.$datas['mov_image'].'" alt="'.$datas['mov_title'].'" title="'.$datas['mov_title'].'">');
                                        echo('</a>');
                                        echo('</div>');
                                        echo('<h1>');
                                        echo($datas['mov_title']);
                                        echo('</h1>');
                                        echo('<h2>');
                                        echo($datas['mov_director']);
                                        echo('</h2>');
                                        echo('<p>');
                                        echo($datas['mov_description_long']);
                                        echo('</p>');
                                        echo('<a class="btn btn-primary btn-lg" href="#" role="button"><span class="glyphicon glyphicon-edit"></span> Editer</a></p>');
                                    }

                                }
                                catch(Exception $errorRequest){
                                    die('Erreur : ' . $e->getMessage());
                                    
                                }
        
                            
                        }
                        else{
                            echo('<script>alert("Ohohoh pas de faille sql ici !");</script>');
                        }

                        
                      ?>

                    </div>
                </div>
            </div>


            <script src="lib/jquery/jquery-2.1.4.js"></script>
            <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>