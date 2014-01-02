<?php
	define('DSN', 'mysql:host=localhost;dbname=bddjouets');
	define('USER', 'root');
	define('MDP', 'joliverie');
		
	$cnx = new PDO($source, $user, $pass);
	$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

	// $connect_db=mysql_connect($host,$user,$pass);
	// mysql_select_db($base ,$connect_db);
	
    if (!isset($connection) || $connection != null) {
        $connexion = connect();
    }

// connexion Ã  la base
function connect() {
    try {
        $connexion = new PDO(DSN, USER, MDP);
//            $sql ="SET NAMES latin1_german1_ci";
        $sql = "SET NAMES utf8";
        $stmt = $connexion->query($sql);
        //echo "connexion réussie";
    } catch (PDOException $e) {
        echo "Erreur ! : " . $e->getMessage() . "<br />";
        $connexion = null;
    }
    return $connexion;
}
// liste des categories
function getLesCategories($conn) {
    $sql = "SELECT * FROM CATEGORIE";
    $stmt = $conn->query($sql);
    if (!$stmt) {
        $retour = false;
    } else {
        $retour = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $retour;
}

// obtenir une categorie
function getUneCategorie($conn, $id) {
    $sql = "SELECT * FROM CATEGORIE WHERE id_cat =:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute((array(':id' => $id)));
    $habitant = $stmt->fetch(PDO::FETCH_ASSOC);
    return $categorie;
}
// liste des categories
function getLesProduits($conn) {
    $sql = "SELECT * FROM PRODUIT";
    $stmt = $conn->query($sql);
    if (!$stmt) {
        $retour = false;
    } else {
        $retour = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $retour;
}

// obtenir une categorie
function getUnProduit($conn, $id) {
    $sql = "SELECT * FROM PRODUIT WHERE id_prod =:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute((array(':id' => $id)));
    $habitant = $stmt->fetch(PDO::FETCH_ASSOC);
    return $produit;
}
?>