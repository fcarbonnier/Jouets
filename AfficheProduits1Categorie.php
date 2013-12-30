<HTML>
<!-- Cette page fait suite à la page ChoisirUneCategorie-->
<!-- elle récupère en méthode Get le champ TIdCat du formulaire de saisie-->
<!-- elle affiche tous les produits correspondant à ce numéro catégorie -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <?php
 	include ('connexion.php');
	mysql_query("SET NAMES 'utf8'");

?>
     
<p><H1>Liste des produits de la catégorie choisie</H1><BR>
     	 
<?php

// Récupération du champ TIdcat et vérification s'il a bien été saisi

if (empty($_GET["TIdCat"]) )
{
	//Message d'erreur si la saisie n'a pas eu lieu 
	echo "PB : le code catégorie n' a pas été renseigné précédemment";
}
else
{
		//Mémorisation du code  - ici dans la variable $ChoixIdCat  - si la saisie a bien eu lieu 
		$ChoixIdCat = $_GET["TIdCat"];  

		echo "<H2>vous avez choisi la catégorie $ChoixIdCat</H2>";
	
		//Il faudrait vérifier son existence dans la table catégorie et afficher son libellé
		//*************   à vous de compléter ********************
	
		//Récupération des produits correspondants à $ChoixIdCat
		$query = mysql_query( "SELECT * FROM produit where id_cat = $ChoixIdCat" );

		//Et affichage du résultat
		while ($row = mysql_fetch_array($query))
      		 {
			 $Libelle =  $row['lib_prod'];
    			  echo "$Libelle <BR/>	";
		}
}

?>
<p><H3> <A  href="index.php">Retour Page d'accueil</A></H3></P>
</HTML>

