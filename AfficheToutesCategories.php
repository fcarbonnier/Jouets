<?php
		include ('connexion.php'); 
		$sql="SELECT id_cat,lib_cat FROM categorie order by lib_cat";
		$qid=$cnx->prepare($sql);
		$qid->execute();


//				$query = mysql_query( "SELECT * FROM categorie order by lib_cat" );


	echo '<p><h3> Gestion des catégories</h3> </p>';

	while($row=$qid->fetch(PDO::FETCH_OBJ))
	{	
		// $Id = $row->id_cat; 
		// $Libelle =  $row->lib_cat;
		echo $row->id_cat.' '. $row->lib_cat;
		echo '<br>';
	
		
	}

 	//while ($row = mysql_fetch_array($query))
    //    	{
	// 	$Id = $row['id_cat']; 
   	//	$Libelle =  $row['lib_cat'];
    // 		echo "<TR><TD>$Id</TD>
	//		<TD>$Libelle</TD></TR>";
	//} 


	$qid->closeCursor();
	$cnx = null;

?>

