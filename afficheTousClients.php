<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
 	include ('connexion.php'); 
?>

<div id= "Corps">
 <body>
     <p><H1>Liste des clients</font></H1><BR>
<?php
	$query = mysql_query( "SELECT * FROM client" );
	$nbclients = mysql_numrows($query); 
	echo '<p><table border=2 width="75%">';
	echo "<tr><th>ID</th><th>nom</th><th>prenom</th><th>cp</th><th>actions</th></tr>";
 	for ($i = 0 ; $i < $nbclients; $i++)
       	{
		$row = mysql_fetch_array($query);
	 	$IdCli = $row['id_cli']; 
   		$nom =  $row['nom_cli'];
        	$prenom = $row['prenom_cli'];
		$cp = $row['codepos_cli'];
	
     		echo "<tr><td>$IdCli</td>
			<td>$nom</td>
			<td><$prenom></td>
			 <td>$cp</td>
			<TD><A href='afficheUnClient.php?choixCli=$IdCli'>Voir le détail</A></TD>
			<TD><A href='supprimeUnClient.php?choixCli=$IdCli'>Supprimer</A></TD></TR>";	
	}
?>	
<p><H3> <A  href="index.php">Retour Page d'accueil</A></H3></P>
</HTML>

