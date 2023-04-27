<?php
require("inc_config.php");
try{
	$dsn="mysql:host=".HOST.";dbname=".DB;
	$idcon = new PDO($dsn,USER,PWD);
	$idcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $exp) {
   echo "<b>Erreur : " . $exp->getMessage() . "</b>";
   exit();
  // die();
}

?>