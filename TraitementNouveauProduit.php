<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
 	include ('connexion.php');
 ?>
<body>
     <p><h1>Information sur le produit enregistré</h1></p>
<?php

        //Récupération et mémorisation des infos du produit précédemment créé
		
	$wLibel = $_POST["TLibelProd"];
	$wPrix = $_POST["TPrix"];
	$wTCarac=$_POST["TCarac"];
	$wExt=$_POST["TExtension"];
	$wImage = $_POST["TImageProd"];
	$wCateg=$_POST["LibCat"];
		          
        //requête d'ajout - le numéro étant automatique il n'est pas précisé dans la requête…	

	$requete = "insert into  produit (lib_prod,prix_TTC_prod,car_prod,ext_prod,photo_prod, id_cat)values( '$wLibel', '$wPrix', '$wTCarac', '$wExt', '$wImage','$wCateg' ) ";


	//exécution de la requête

        mysql_query ($requete);
	
	//affichage du produit ajouté  (sans le numéro attribué)
	 $LienImage ="Images/".$wImage;
	

       echo "
        <TABLE>
	<tbody>
        	<TR><TD>Libellé</TD> <TD>$wLibel</TD></TR>
		<TR><TD>Prix TTC</TD><TD>$wPrix</TD></TR>
		<TR><TD>Image</TD><TD>$wImage</TD></TR>		
		<TR><TD>Id catégorie</TD><TD>$wCateg</TD></TR>
           </tbody>
        </TABLE>
        ";
?>
<p> <A    href="SaisirNouveauProduit.php" >Autre création</A></P><BR>
<p> <A  href="index.php">Retour au menu</A></P><BR>
</body></HTML>

