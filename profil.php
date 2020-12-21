<?php
	session_start();
    include('connexion.php');
	if(isset($_GET['id']) AND $_GET['id'] > 0) {
	   $getid = intval($_GET['id']);
	   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
	   $requser->execute(array($getid));
	   $userinfo = $requser->fetch();
	?>
	<html>
	   <head>
	      <title>Profil d'utilisateur</title>
	      <meta charset="utf-8">
	   </head>
	   <body>
	      <div align="center">
	         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
	         <br /><br />
	         Pseudo = <?php echo $userinfo['pseudo']; ?>
	         <br />
	         Mail = <?php echo $userinfo['mail']; ?>
	         <br />
	         <?php
	         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
	         ?>
	         <br />
	         <a href="pageaccueil.php">Retour sur la webradio</a>
	         <?php
	         }
	         ?>
	      </div>
	   </body>
	</html>
	<?php   
	}
	?>