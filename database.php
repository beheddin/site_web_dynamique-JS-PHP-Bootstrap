<?php
  define('HOST','localhost');
  define('DB_NAME','my_database');
  define('USER','root');
  define('PASS','root');

try {
  $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS); //$db: var qui permet de se connecter à la BD
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<script>alert(\"Vous etes connecté à votre base de données: ". DB_NAME ."\")</script>";
	}
catch (PDOException $e) {
    echo $e;
	}
?>
