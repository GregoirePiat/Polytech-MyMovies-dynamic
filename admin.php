<!DOCTYPE html>
<html lang="fr">

<?php include 'includes/head.php';?>

    <body>
        <?php include 'includes/nav.php';?>

            <div class="container">
                <div class="row">
                    <div id="adminHeader" class="col-md-12">
                        <h1>Administration</h1>

                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li role="presentation" class="active"><a href="#films" aria-controls="home" role="tab" data-toggle="tab">Films</a></li>
                                <li role="presentation"><a href="#utilisateurs" aria-controls="profile" role="tab" data-toggle="tab">Utilisateurs</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="films">
                                    <div class="panel panel-default">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>Titre</th>
                                                <th>Réalisateur</th>
                                                <th>Année de sortie</th>
                                                <th>Actions</th>
                                            </tr>
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
                                                    echo('<tr>');
                                                    echo('<td>');
                                                    echo('<a href="movie.php?id='.$datas['mov_id'].'">');
                                                    echo ($datas['mov_title']);
                                                    echo('</a>');
                                                    echo('</td>');
                                                    echo('<td>');
                                                    echo($datas['mov_director']);
                                                    echo('</td>');
                                                    echo('<td>');
                                                    echo($datas['mov_year']);
                                                    echo('</td>');
                                                    echo('<td>');
                                                    echo('<button type="button" class="btn btn-default btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>');
                                                    echo('<button type="button" class="btn btn-default btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>');
                                                    echo('</td>');
                                                    echo('</tr>');
                                                }

                                            }
                                            catch(Exception $errorRequest){
                                                die('Erreur : ' . $e->getMessage());
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="utilisateurs">
                                    <div class="panel panel-default">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Login</th>
                                                <th>Actions</th>
                                            </tr>
                                            <tr>
                                                <td>Diab</td>
                                                <td>Nicolas</td>
                                                <td>Strelytsia</td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                                    <button type="button" class="btn btn-default btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gory</td>
                                                <td>Alexandre</td>
                                                <td>goryAlexandre</td>
                                                <td>
                                                    <button type="button" class="btn btn-default btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                                    <button type="button" class="btn btn-default btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <footer class="col-md-12">
                    <p class="text-center">
                        Construit avec <span class="glyphicon glyphicon-heart"></span> par <a href=http://www.gregoirepiat.fr target="blank">Grégoire Piat</a>
                    </p>
                </footer>
            </div>


            <script src="lib/jquery/jquery-2.1.4.js"></script>
            <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>