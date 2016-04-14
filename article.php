<?php
function article_entier($n){
      $server= "nom du seveur";
      $user = "nom de l'user";
      $base = "nom de la base/Articles";
      $connexion=mysql_pconnect($server, $user);
      if (!connexion){
         exit; return "Pas de connexion au serveur BDD";
      }
      if (!mysql_select_db($base, $connexion)){
         exit; return "Pas d'acces à la base";
      }
      $req= " SELECT Titre, Auteur, Contenue, Date
              FROM Articles
              WHERE Numero='$n'";
      $resultat = mysql_query($req,$connexion);
      $ligne = mysql_fetch_assoc($resultat);
      return "<div id=\"article\"
              <h1>$ligne[Titre]</h1>
              <h2>$ligne[Auteur]</h2>
              <h3>$ligne[Date]</h3>
              <p>$ligne[Contenue]</p>
              </div>";
}