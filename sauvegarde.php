<?php 
function sauvegarde(){	
         $remplis=true;
         $valide=true;
         if (!(isset($_POST["nom"]))|| $_POST["nom"]=="")
         $remplis=false;
         if (!(isset($_POST["prenom"]))|| $_POST["prenom"]=="")
         $remplis=false;
         if (!(isset($_POST["date"])) || $_POST["date"]=="")
         $remplis=false;
         if (!(isset($_POST["mail"])) || $_POST["mail"]=="")
         $remplis=false;
         if ($_POST["nom"]!=htmlentities($_POST["nom"]))
         $valide=false;
         if ($_POST["prenom"]!=htmlentities($_POST["prenom"]))
         $valide=false;
         if ($_POST["date"]!=htmlentities($_POST["date"]))
         $valide=false;
         if ($_POST["mail"]!=htmlentities($_POST["mail"]))
         $valide=false;

         if (!$remplis){
         return "remplis mieux <br/> <a href=\"index.php?page=inscription\">Retourner au form</a>";
         } else if(!$valide){
         return "c'est pas valide <br/> <a href=\"index.php?page=inscription\">Retourner au form</a>";
      } else {
			$_SESSION["nom"]=$_POST["nom"];
			$_SESSION["prenom"]=$_POST["prenom"];
			$_SESSION["date"]=$_POST["date"];
			$_SESSION["mail"]=$_POST["mail"];
            $_SESSION["inscrit"]=true;
			
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
			$pass=md5("$_POST[password]");
			$req="INSERT INTO users VALUES(DEFAULT,'$_POST[nom]','$_POST[prenom]','firalon','$pass','1')";
			mysql_query($req,$connexion) OR die(mysql_error());
				header('Location: index.php');		
		}
}	
?>
