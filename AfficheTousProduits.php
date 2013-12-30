<?php
 	include ('connexion.php'); 
?>
<div id= "Corps">
 <body>
     <p><H1>Liste des produits de la catégorie choisie</font></H1><BR>
<?php

	$query = mysql_query( "SELECT * FROM produit" );
	$nbproduits = mysql_numrows($query); 
	echo '<p><table border=2 width="75%">';
	echo "<tr><th>ID</th><th>libellé</th><th>photo</th><th>prixTTC</th></tr>";
 	for ($i = 0 ; $i < $nbproduits ; $i++)
       	{
		$row = mysql_fetch_array($query);
	 	$Id = $row['id_prod']; 
   		$Libelle =  $row['lib_prod'];
        	$Imageprod = $row['photo_prod'];
		$prix =   $row['prix_ttc_prod'];
	
     		echo "<tr><td>$Id</td>
			<td>$Libelle</td>
			<td><img src = $Imageprod></td>
			 <td>$prix</td></tr>";
	}
?>	

<p><H3> <A  href="index.php">Retour Page d'accueil</A></H3></P>
</HTML>
