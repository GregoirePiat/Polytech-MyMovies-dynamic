<?php include "includes/head.php";?>

    <?php include "includes/nav.php"; ?>

        <div class="container">

            <form action="traitementAjoutFilm.php" method="POST">
                <div class="form-group">
                    <label for="titleFilm">Titre :</label>
                    <input type="text" class="form-control" id="titleFilm" name="titleFilm" placeholder="Titre du film" required>
                </div>
                <div class="form-group">
                    <label for="descriptionFilm">Description :</label>
                    <input type="text" class="form-control" id="descriptionFilm" name="descriptionFilm" placeholder="Description" required>
                </div>
                <div class="form-group">
                    <label for="directorFilm">Nom du directeur :</label>
                    <input type="text" class="form-control" id="directorFilm" name="directorFilm" placeholder="Nom du directeur" required>
                </div>
                <div class="form-group">
                    <label for="dateFilm">Année de sortie :</label>
                    <input type="number" min="1800" , max="2100" class="form-control" id="dateFilm" name="dateFilm" placeholder="Année de sortie" required>
                </div>
                <div class="form-group">
                    <label for="imageFilm">Image du film</label>
                    <input type="file" id="imageFilm" name="imageFilm" required>
                </div>
                <button type="submit" class="btn btn-default">Ajouter le film</button>
            </form>
        </div>

        <?php include("includes/footer.php"); ?>)