<htlm>
<?php
 	include ('connexion.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <body>
<SCRIPT language="JavaScript" >
function ControlerChamps()
{
	var ok=1;
	var extension = formSaisieProduit.TExtension.value;
	var ext=formSaisieProduit.TImageProd.value.indexOf(extension,0);

	if (formSaisieProduit.TPrix.value =="")
	{
		alert("le prix doit être renseigné "); 
		ok=0;
		formSaisieProduit.TPrix.focus();
		return false; 
	}
	if (isNaN(formSaisieProduit.TPrix.value))
	{
		alert("le prix doit être numérique "); 
		ok=0;
		formSaisieProduit.TPrix.focus();
		return false; 
	}
	if (ext==-1)
	{
		alert("le type de votre image ne correspond pas à l'extension choisie");
		ok=0;
		formSaisieProduit.TImageProd.focus();
		return false;
	}
	
	if (ok==1) 
	{
		alert("Formulaire envoyé");
		formSaisieProduit.submit();
	}
 }
</SCRIPT>
  <div id= "Corps">

     <p><h1>Création d'un nouveau produit- version 2 avec les contrôles </h1></p><BR/>
	 <FORM  action = "TraitementNouveauProduit.php" METHOD = "POST" name="formSaisieProduit">
<?php
//préparation de la liste des catégories possibles.
$query = mysql_query( "SELECT * FROM categorie order by 2" );

echo "  
	<Form>                                                                                                                                 

        <TABLE>
	<tbody>

        <TR><TD>Libellé *</TD><TD><INPUT NAME=TLibelProd size=20 ></TD></TR>
	<TR><TD>Prix TTC *</TD><TD><INPUT NAME=TPrix size=5 ></TD></TR>
	<TR><TD>Car_produit</TD><TD><INPUT NAME=TCarac size=70 ></TD></TR>
	<TR><TD>Extension</TD>
	<TD><select name='TExtension'>
	<option selected value='jpg'>jpg</option>
   	<option value = 'gif'>gif</option>
   	<option value = 'bmp'>bmp</option>
   	<option value = 'png'>png</option>
	</select>
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
	<input type='button' value='Valider' onClick='return ControlerChamps()'>
	
	</FORM>";
?>
<p> <A  href="index.php">Retour au menu</A></P><BR>
</div>
</body>
</HTML>

