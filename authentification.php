<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion Webradio IUT Belfort-Montbeliard</title>
    </head>
    <body>
    <?php
	session_start();
    include('connexion.php');
	if(isset($_POST['formconnexion'])) {
	   $mailconnect = htmlspecialchars($_POST['mailconnect']);
	   $mdpconnect = sha1($_POST['mdpconnect']);
	   if(!empty($mailconnect) AND !empty($mdpconnect)) {
	      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
	      $requser->execute(array($mailconnect, $mdpconnect));
	      $userexist = $requser->rowCount();
	      if($userexist == 1) {
	         $userinfo = $requser->fetch();
	         $_SESSION['id'] = $userinfo['id'];
	         $_SESSION['pseudo'] = $userinfo['pseudo'];
	         $_SESSION['mail'] = $userinfo['mail'];
	      } else {
	         $erreur = "Mauvais mail ou mot de passe !";
	      }
	   } else {
	      $erreur = "Tous les champs doivent être complétés !";
	   }
	}
	?>
	      <div align="center">
	         <h2>Connexion</h2>
	         <br /><br />
	         <form action ="pageaccueil.php" method="POST" action="">
	            <input type="email" name="mailconnect" placeholder="Mail" />
	            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
	            <br /><br />
	            <input type="submit" name="formconnexion" value="Se connecter !" />
	         </form>
	         <?php
	         if(isset($erreur)) {
	            echo '<font color="red">'.$erreur."</font>";
	         }
	         ?>
	      </div>
	   </body>
	</html>
    <br><br><br><br><br>
    <div align="center">
    <form action="verification.php" method="post">
        <button onclick="verification.php">création de compte</button>
    </fieldset>
    </div>
    </body>
</html>