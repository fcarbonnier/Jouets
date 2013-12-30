<HTML><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <body>
<SCRIPT language="JavaScript" >
function ControlerChamps()
{
	var ok=1;
	if (formSaisieCateg.TLibel.value=="")
	{
		alert("Veuillez remplir le libellé "); 
		ok=0;
		formSaisieCateg.TLibel.focus();
		return false; 
	}
	if (formSaisieCateg.TImage.value=="")
	{
		alert("attention à l'image ");
	}
	if (ok==1) 
	{
		formSaisieCateg.submit();
	}
 }
</SCRIPT>

  <div id= "Corps">
 <p><h1>Création d'une nouvelle catégorie - Version 2 avec contrôles </h1></p><BR/>

<FORM action="TraitementNouvelleCategorie.php"   method="post" name = "formSaisieCateg">
        <TABLE>
        <tbody>
	<TR><TD>Libellé *</TD><TD><INPUT type = "text" NAME="TLibel" </TD></TR>
	<TR><TD>Intitulé image</TD><TD><INPUT type = "text" NAME="TImage"></TD></TR>
        </tbody>
        </TABLE>

	<H3> Pensez à créer l'image dans le répertoire ImagesCategorie avant de créer cette catégorie</H3><BR/>

<input type="button" value="Valider" onClick="return ControlerChamps()">
<input type="reset" value="Effacer le formulaire">
</FORM>

<p> <A  href="index.php">Retour au menu</A></P><BR>
</div> 
</body>
</HTML>

