<?php
  
function inscription(){
	if (!isset($_SESSION["nom"])){
		return  "<form action=\"index.php?page=sauvegarde\" method=\"post\">
                    Nom<input type=\"text\" name=\"nom\">   <br/>                 
                    Prenom<input type=\"text\" name=\"prenom\"><br/>
                    Date<input type=\"date\" name=\"date\"><br/>
                    Email <input type=\"email\" name=\"mail\"><br/>
					Password<input type=\"password\" name=\"password\">
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
