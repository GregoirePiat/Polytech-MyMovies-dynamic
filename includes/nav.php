<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="col-md-10">
            <!-- Partie de la barre toujours affichée -->
            <div class="navbar-header">
                <!-- Bouton d'accès affiché à droite si la zone d'affichage est trop petite -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                    <span class="sr-only">Activer la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-film"></span> MyMovies</a>
            </div>
            <!-- Partie de la barre masquée si la surface d'affichage est insuffisante -->
            <div class="collapse navbar-collapse" id="navbar-collapse-target">
                <ul class="nav navbar-nav">
                    <li class=""><a href="#">Ajouter un film</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin.php"><span class="glyphicon glyphicon-cog"></span> Administration</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenue, Grégoire <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="profil.php">Profil</a></li>
                            <li><a href="#">Quitter</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>