<?php
    include_once ('connexion.php'); 
		
    if ($connexion) {
        $listeCategories = getLesCategories($connexion);
        if ($listeCategories) {
            $ok = true;
        }else{
            $ok = false;
        }       
    } else {
        $ok = false;
    }
    $titre = "Liste des categories";
    include("entete.php");
    if($ok){
     
        echo '<table><tr><th classe="libelle">libellé </th><th classe="id">identifiant</th></tr>';
    // pour chaque enregistrement
        foreach ($listeCategories as $categorie) {
        echo '<tr>';
        // préparation de l'adresse du lien
        // $url='index.php?action=afficherUnePersonne&';
        // $url= $url.'id='.$personne["IDPERS"];
        // première colonne, hyperlien sur le nom de l'habitant
        // echo "<td><a href=\"".$url."\">".$personne["NOMPERS"]."</a></td>";
        // deuxième colonne, année de naissance de l'habitant
        echo '<td>'.$categorie["lib_cat"].'</td>';
        echo '<td>'.$categorie["id_cat"].'</td>';
        //3ième colonne
        // echo '<td><a href="./controleur/confirm_supp_personne.php?id='. $personne["IDPERS"] . '"> <img src="images/b_drop.png" /> </a></td>';
        echo '</tr>';
        }
        echo '</table>';

    }else{
        echo '<h1>Erreur</h1>';
    }
    include("./vue/pied.php");

	

	while($row=$qid->fetch(PDO::FETCH_OBJ))
	{	
		echo $row->id_cat.' '. $row->lib_cat;
		echo '<br>';
	}

 	$qid->closeCursor();
	$cnx = null;

?>

