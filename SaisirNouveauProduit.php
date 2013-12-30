<htlm>
<?php
 	include ('connexion.php');
?>

<SCRIPT language="JavaScript" >
function controler()
{
var ok=1;
if (isNaN(nouvproduit.TPrix.value))
	{
	alert("Veuillez donner un prix numérique");
	ok=0;
	nouvproduit.TPrix.focus();
	return false;
	}
if (ok==1){
	alert("Formulaire envoyé");
	nouvproduit.submit();
	}
}

</SCRIPT>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <body>
  <div id= "Corps">

     <p><h1>Création d'un nouveau produit </h1></p><BR/>
	 
<?php
//préparation de la liste des catégories possibles.
$query = mysql_query( "SELECT * FROM categorie order by 2" );

echo "                                                                                                                                
	<FORM  action = 'TraitementNouveauProduit.php' METHOD = 'POST' name='nouvproduit'>
        <TABLE>
	<tbody>

        <TR><TD>Libellé</TD><TD><INPUT NAME=TLibelProd size=20 ></TD></TR>
	<TR><TD>Prix TTC</TD><TD><INPUT NAME=TPrix size=5 ></TD></TR>
	<TR><TD>Car_produit</TD><TD><INPUT NAME=TCarac size=70 ></TD></TR>
	<TR><TD>Extension produit</TD><TD><INPUT NAME=TExtension size=3 ></TD></TR>
        <TR><TD>Intitulé image</TD><TD><INPUT NAME=TImageProd size=30></TD></TR>
	<TR><TD>Categorie</TD>
		<!--  mise en place de la liste des catégories -->
		<TD> <SELECT NAME = 'LibCat' >";
		//pour chaque ligne catégorie  , création d'une ligne d'option
		//de valeur interne = Id_categ  , d'affichage = Libellé_categ

		while  ($row = mysql_fetch_array($query))
		{	
			$wIdCateg = $row['id_cat'];
			$wLibel =  $row['lib_cat'];
			echo "<OPTION VALUE=$wIdCateg>$wLibel</OPTION>";
      
		}
   		 
		echo "</SELECT>
		</TD></TR>
	</tbody>
	</TABLE>
	
 	<H3> Pensez à créer l'image dans le répertoire ImagesProduits avant de créer ce produit</H3>
	<BR/>

	<input type='submit' value='Valider' onclick='return controler()' >
	</Form>";
?>
<p> <A  href="index.php">Retour au menu</A></P><BR>

</div>
</body>
</HTML>

