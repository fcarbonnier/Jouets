<?php
 include ('connexion.php');
 
?>

  <p>Choix d'un produit<BR/>
<?php
//Affichage simple de l'ensemble des produits
$query = mysql_query( "SELECT * FROM produit" );

 while ($row = mysql_fetch_array($query))
     	 {
		$Idprod = $row['id_prod'];
       		 $Libprod= $row['lib_prod'];
       		echo "$Idprod. $Libprod..<BR/>" ;		
	}
?>
<!-Saisie du code produit souhaité et envoie à la page Affiche1Produits-->
<!-Mise en place d’un formulaire avec une zone de saisie pour le code  -->

<FORM  action = 'affiche1produit.php' method = 'get'>
Entrer le code produit </p>  <input type ="text" NAME = "TIdprod" SIZE = "2"> 
<input type ='submit' value = 'Voir la fiche produit'>

</FORM>
<p><H3> <A  href="index.php">Retour Page d'accueil</A></H3></P>
</HTML>
