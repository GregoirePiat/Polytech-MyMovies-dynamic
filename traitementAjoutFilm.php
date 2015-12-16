<?php
/**
 * Created by PhpStorm.
 * User: Grégoire
 * Date: 15/12/2015
 * Time: 08:28
 */


if(isset($_POST['titleFilm']) && isset($_POST['descriptionFilm']) && isset($_POST['directorFilm']) && isset($_POST['dateFilm']) && isset($_POST['imageFilm'])){
   $titreFilm = htmlspecialchars($_POST['titleFilm']);
    $descriptionFilm = htmlspecialchars($_POST['descriptionFilm']);
   $directorFilm = htmlspecialchars($_POST['directorFilm']);
    $dateFilm = htmlspecialchars($_POST['dateFilm']);
    $imageFilm = htmlspecialchars($_POST['imageFilm']);   
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=mymovies;charset=utf8', 'mymovies_user', 'secret');
            $req = $bdd->prepare("INSERT INTO movie (mov_title, mov_description_short, mov_description_long, mov_director, mov_year, mov_image) VALUES ('".$titreFilm."', '".$descriptionFilm."', '".$descriptionFilm."', '".$directorFilm."', '".$dateFilm."', '".$imageFilm."')");
        $req->execute(array(
            "mov_title" => $titreFilm, 
            "mov_description_short" => $descriptionFilm,
            "mov_description_long" => $descriptionFilm,
            "mov_director" => $directorFilm,
            "mov_year" => $dateFilm,
            "mov_image" => $imageFilm
            ));
        $data = $req->fetchAll();
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
}
else{
        alert('Veuillez renseigner tous les champs du formulaire');
   
    }

?>