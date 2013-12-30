<HTML>
<!-- Cette page fait suite à la page ChoisirUnProduitSurId-->
<!-- elle récupère en méthode Get le champ TIdProd du formulaire de saisie-->
<!-- elle affiche la fiche produit correspondant à ce numéro produit -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <?php
 	include ('connexion.php');
	mysql_query("SET NAMES 'utf8'");

?>
     
<p><H1>Fiche produit du numéro choisi</H1><BR>
     	 
<?php

// Récupération du champ TIdprod et vérification s'il a bien été saisi

if (empty($_GET["TIdprod"]) )
{
	//Message d'erreur si la saisie n'a pas eu lieu 
	echo "PB : le code produit n' a pas été renseigné précédemment";
}
else
{
		//Mémorisation du code  - ici dans la variable $ChoixIdprod  - si la saisie a bien eu lieu 
		$ChoixIdprod = $_GET["TIdprod"];  

		echo "<H2>vous avez choisi le produit $ChoixIdprod</H2>";
		
		//Récupération des autres champs de ce produit
		$query = mysql_query( "SELECT * FROM produit where id_prod = $ChoixIdprod" );
		$row = mysql_fetch_array($query); //pas de boucle while car un seul produit
		$idprod =$row['id_prod'];
		if ($idprod!="")
		{
			echo '<p><table border=2 width="75%">';
			echo "<tr><th>libellé</th><th>caractéristique</th><th>photo</th><th>prixTTC</th><th>catégorie</th></tr>";		 
			 $Libelle =  $row['lib_prod'];
			$prixTTC = $row['prix_ttc_prod'];
			$car = $row['car_prod'];
			$photo = $row['photo_prod'];
			$cat = $row['id_cat'];
			echo "<tr><td>$Libelle</td>
				<td>$car</td>
				<td><img src = $photo></td>
				 <td>$prixTTC</td>
				<td>$cat</td></tr>";
		}
		else echo("ce produit n'existe pas");
		
}

?>
<p><H3> <A  href="index.php">Retour Page d'accueil</A></H3></P>
</HTML>
