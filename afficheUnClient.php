<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <?php
 	include ('connexion.php');
	mysql_query("SET NAMES 'utf8'");

?>
     
<p><H1>Fiche client du numéro choisi</H1><BR>
     	 
<?php

	
		$ChoixIdcli = $_GET["choixCli"];  

		echo "<H2>vous avez choisi le client $ChoixIdcli</H2>";
		
		//Récupération des autres champs de ce produit
		$query = mysql_query("SELECT * FROM client where id_cli = $ChoixIdcli");
		$row = mysql_fetch_array($query); 
		$idcli =$row['id_cli'];
		if ($idcli!="")
		{
			echo '<p><table border=2 width="75%">';
			
			 $nom =  $row['nom_cli'];
			$prenom = $row['prenom_cli'];
			$rue = $row['rue_cli'];
			$codepos = $row['codepos_cli'];
			$ville = $row['ville_cli'];
			$tel = $row['tel_cli'];
			$mail = $row['mail_cli'];
			$mdp = $row['mdp_cli'];
			$datedercde= $row['DateDerCde_cli'];
			echo "<tr><td>nom</td><td>$nom</td><br>
				<td>prenom</td><td>$prenom</td><br>
				<td><$rue></td>
				 <td>$codepos</td>
				<td>$ville</td>
				<td>$tel</td>
				<td>$mail</td>
				<td>$mdp</td>
				<td>$datedercde</td></tr>";
		}
			


?>
<p><H3> <A  href="index.php">Retour Page d'accueil</A></H3></P>
</HTML>
