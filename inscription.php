<?php
  
function inscription(){
	if (!isset($_SESSION["nom"])){
		return  "<form action=\"index.php?page=sauvegarde\" method=\"post\">
                    Prenom<input type=\"text\" name=\"prenom\"><br/>                 
                    Nom<input type=\"text\" name=\"nom\"><br/>
                    Pseudo<input type=\"text\" name=\"pseudo\"><br/>
                    Email <input type=\"email\" name=\"mail\"><br/>
                    Mot de passe<input type=\"password\" name=\"mdp1\"><br/>
                    Confirmation de mot de passe<input type=\"password\" name=\"mdp2\"><br/>
        	    <input type=\"submit\" value=\"Valider  \">
         </form> "  ;
	}else {
		$nom=$_SESSION["nom"];
		$prenom=$_SESSION["prenom"];
                $date=$_SESSION["date"];
                $mail=$_SESSION["mail"];
		return " <form action=\"index.php?page=sauvegarde\" method=\"post\">
           		 	Nom<input type=\"text\" name=\"nom\" value=\"$nom\">  <br/>                 
				Prenom<input type=\"text\" name=\"prenom\" value=\"$prenom\"><br/>
           			Date<input type=\"date\" name=\"date\" value=\"$date\"><br/>
           			Email <input type=\"email\" name=\"mail\" value=\"$mail\"><br/>
				<input type = \"submit\" value=\"Enregistrer les modifications\">	

			</form>
	
";
	}	
}
?>	
