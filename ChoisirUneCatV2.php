<HTML>
 <?php
 include ('connexion.php');
 ?>
 <div id= "Corps">
 <body>
     <p><H1>Choix d'une catégorie</font></H1>
<?php

//Affichage de l'ensemble des catégories avec le lien
$query 	= mysql_query( "SELECT * FROM categorie order by 2" );
echo "<p><H2>Catégories actuelles</font></H2>
<TABLE  BORDER = 1 width = 700>";
 while ($row = mysql_fetch_array($query))
	{
	$IdCat = $row['id_cat'];
      	$LibCat =  $row['lib_cat'];
       	 echo "<TR><TD>$IdCat</TD>
		<TD>$LibCat</TD>
		<TD><A href='AfficheProduits1CatV2.php?choix=$IdCat'>Voir les produits associés</A></TD></TR>";
	}
echo"</TABLE>"; 
?>
</HTML>
