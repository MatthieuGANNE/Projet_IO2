<?php
function identification(){
      $server= "pams.script.univ-paris-diderot.fr";
			$user="fszcze92";
			$base="fszcze92";
			$password="c3F)o*5B";
			$connexion = mysql_connect($server, $user, $password);
			if (!$connexion){
			echo "connexion none"; exit;
			}
			if (!mysql_select_db($base,$connexion)){
			echo "pas de base"; exit;
			}			
      $req= " SELECT *
              FROM users
              WHERE nickname='$_POST[nickname]'";
      if (!$resultat = mysql_query($req,$connexion)){
         return "Identifiant ou mot de passe incorrect";
      }
	  $ligne=mysql_fetch_assoc($resultat);
/* ----------------VOIR POUR LE HASHAGE --------------------------------------*/
		$a=$_POST["mdp"];
		$pass=md5($a);
		$pass2=md5($a);
		echo $pass;
		echo "<br/>".$pass2;
      if ($ligne["password"]==$pass){
		$_SESSION["nom"]=$ligne["lastname"];
		$_SESSION["prenom"]=$ligne["firstname"];
         header("index.php?page=accueil");
      } else {
         return "Identifiant ou mot de passe incorrect";
      }        
/* ----------------VOIR POUR LE HASHAGE --------------------------------------*/

}
?>
    
