<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Webradio IUT Belfort-Montbeliard</title>
        <link href="accueil.css" rel="stylesheet">
    </head>
    <body>
    <div class="haut">
        <h3 class="titre">Webradio de l'IUT belfort-Montbéliard</h3>
        <div class="logo">
            <img src="iutlogo.png" width="160" height="80">
        </div>
        <nav>
            <form action="biblio.php" method="get" class="recherche">
                <input type="text" id="recherche" name="recherche" size="80">
                <input type="submit" size="30" class="confirmer">
            </form>
        </nav>
        <header>
            <div class="live_audio">
                <a href="liveactu.php">Live en cour</a>
            </div>
            <div class="verif">
                <a href="authentification.php">authentification/création de compte</a>
            </div>
            <div class="audio">
                <a href="live.php">Live audio</a>
            </div>
            <div class="biblio">
                <a href="biblio.php">Bibliothèque</a>
            </div>
        </header>
    </div>
        <div class="contenu">
            <div class="MEA1">
                <h2>rediffusion de pop</h2>
                <a href="live.php"><img src="logopop.png" width="300" height="300"></a>
            </div>
            <div class="MEA2">
                <h2>rediffusion de rock</h2>
                <a href="live.php"><img src="logorock.jpeg" width="300" height="300"></a>
            </div>
            <div class="MEA3">
                <h2>rediffusion de metal</h2>
                <a href="live.php"><img src="logometal.jpeg" width="300" height="300"></a>
            </div>
        </div>
    </body>
</html>