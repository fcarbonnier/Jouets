<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<SCRIPT language="JavaScript" >
function ControlerChamps()
{
	
 }
</script>
 <p><h1>Création d'un nouveau client avec contrôles</h1></p><BR/>

<FORM action="TraitementNouveauClient.php"   method="post" name = "formSaisieClient">
        <TABLE>
        <tbody>
	<TR><TH>Nom </TH><TD><INPUT NAME="TNomCli" size = "20"></TD></TR>
	<TR><TH>Prénom</TH><TD><INPUT NAME="TPrenomCli" size = "20"></TD></TR>
	<TR><TH>Rue</TH><TD><INPUT NAME="TRueCli" size = "30"></TD></TR>
	<TR><TH>Code postal</TH><TD><INPUT NAME="TCpCli" size = "5"></TD></TR>
	<TR><TH>Ville</TH><TD><INPUT NAME="TVilleCli" size = "20"></TD></TR>
	<TR><TH>Tel</TH><TD><INPUT NAME="TTelCli" size = "15"></TD></TR>
	<TR><TH>Mail</TH><TD><INPUT NAME="TMailCli" size = "40"></TD></TR>
	<TR><TH>Mot de passe </TH><TD><INPUT type = "password" NAME="TMdp" size = "12"></TD></TR>
        </tbody>
        </TABLE>

<input type="button" value="Valider" onClick="return ControlerChamps()">
<input type="reset" value="Effacer le formulaire">
</FORM>

<p> <A  href="index.php">Retour au menu</A></P><BR>
</div> 
</body>
</HTML>


