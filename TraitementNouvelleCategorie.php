<HTML>
<?php
 	include ('connexion.php');
	
?>
<body>
     <p><h1>Information sur la catégorie enregistrée</h1></p>
<?php
        //Récupération et mémorisation des infos de la  catégorie saisie précédemment
	    $wLibel = $_POST["TLibel"];
	    $wImage = $_POST["TImage"];
          
        //requête d'ajout - le numéro étant automatique il n'est pas précisé dans la requête INSERT
        $requete = "insert into  categorie(lib_cat ,photo_cat)values( '$wLibel', '$wImage') ";
					 
	   //exécution de la requête
         mysql_query ($requete);
       
	 //affichage de la catégorie ajoutée (ici sans le numéro - ce serait un peu plus compliqué...)
	 $LienImage ="ImagesCategories/".$wImage;
      echo "
     	<TABLE>
	<tbody>

	<TR><TD>Libellé</TD><TD>$wLibel</TD></TR>
	<TR><TD>Lien image</TD><TD>$LienImage</TD></TR>
	<TR><TD>Image</TD><TD><IMG SRC=$LienImage width=120 height=140 /></TD></TR>
          
	</tbody>
        </TABLE>";
?>
//lien de retour
<p> <A  href="SaisirNouvelleCategorie.php">Autre création</A></P><BR>
<p> <A  href="index.php">Retour au menu</A></P><BR>
</body>
</HTML>

