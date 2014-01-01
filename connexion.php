<?php
	define('DSN', 'mysql:host=localhost;dbname=bddjouets');
	define('USER', 'root');
	define('MDP', 'joliverie');
		
//	$cnx = new PDO($source, $user, $pass);
//	$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

	// $connect_db=mysql_connect($host,$user,$pass);
	// mysql_select_db($base ,$connect_db);
	
//    if (!isset($connection) || $connection != null) {
//        $connexion = connect();
//    }
    if (!isset($cnx) || $cnx != null) {
        $cnx = connect();
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
?>