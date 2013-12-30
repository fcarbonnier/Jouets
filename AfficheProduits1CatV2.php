<?php
 include ('connexion.php');
 	
?>
 <div id= "Corps">
 <body>
     <p><H1>Liste des produits de la catégorie choisie</font></H1><BR>
   	 
<?php
	
	//Mémorisation du code  - ici dans le paramètre  choix 
	$ChoixCat = $_GET["choix"];
	
	echo "<H2>vous avez choisi la catégorie $ChoixCat</H2>";

	// Il serait judicieux d'afficher également le libellé catégorie correspondant : 2 solutions possibles ...

	//Récupération des produits correspondant  à $choix

	$query = mysql_query("SELECT * FROM produit where id_cat= $ChoixCat");


	//Et affichage dans un tableau du résultat

	while ($row = mysql_fetch_array($query))
       {
		$Libelle =  $row['lib_prod'];
    		echo "$Libelle <BR/>	";
	}


?>
<p><H3> <A  href="index.php">Retour Page d'accueil</A></H3></P>
</HTML>	
	   


