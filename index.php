<HTML>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	<?PHP
 		include ('connexion.php');
 		
	?>
	<head>
		<link href="jouets.css" rel="stylesheet" media="all" type="text/css"> 
	</head>
	<BODY>
		<DIV id="en_tete"></DIV>
		<DIV id="Haut">	
		</DIV>
 		<DIV id= "Corps">
  			<?PHP		
 				$aujourdhui = getdate();
 				$jour = $aujourdhui['mday'];
 				$mois = $aujourdhui['mon'];
 				$an = $aujourdhui['year'];
 				echo "<h1>Bienvenue sur le site des produits JouetsBois,  aujourd'hui  le $jour/$mois/$an </h1>";
 			?>

			<p><h4>Petit site didactique </h4></p>
			<p><h4> Attention certaines pages ne sont pas fournies car  elles feront l'objet d'un développement ultérieur </h4> </p>
			<BR><BR>

		<div id="corps">
			<h2>Super site</h2>
			<p>
			Bienvenue sur votre futur super site !<br>
			</p>
			En fin de formation vous saurez créer des sites dynamiques en php avec mysql
			<p>Bonnes chances Travaillez bien<br>
			</p>
			 <p><h3> Gestion des catégories</h3> </p>
        		<li><A  href="AfficheToutesCategories.php">visualiser toutes les catégories </A></li>
       			<li><A  href="SaisirNouvelleCategorieV2.php">créer une nouvelle catégorie </A></li>
 			<BR>	
 			<p><h3> Gestion des produits </h3></p>
				<li><A  href="AfficheTousProduits.php">visualiser tous les produits - en image</A></li>
				<li><A  href="ChoisirUneCatV2.php">visualiser les produits d'une catégorie </A></li>
         		<li><A  href="ChoisirUnProduitSurId.php">visualiser un produit à partir de son N° </A></li>
         		<li><A  href="SaisirNouveauProduitV2.php">créer un nouveau produit </A></li><BR>
 			<BR>
			<p><h3> Gestion des clients</h3> </p>
        		<li><A  href="afficheTousClients.php">visualiser tous les clients </A></li>
       			<li><A  href="saisirUnClient.php">créer un nouveau client </A></li>
 			<BR>
			<h4>L'auteur
			<p>Nelly Contant Françoise Carbonnier 
			<br>
			</p></h4>
		</div>
	</BODY>

</HTML>

