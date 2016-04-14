<?php
function acceuil(){
	if (!isset($_SESSION["nom"])){
		return "BLABLABLABLA";
	} else {
		return acceuil_logged($_SESSION["nom"], $_SESSION["prenom"]);
	}
}
function acceuil_logged($nom, $prenom){
	return "Bien le bonjour $prenom $nom <br/> ";

}
         ?>
    
