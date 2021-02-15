
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
  	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

<?php
// verifier si formulaire a été envoyé
if(isset($_POST['formregister'])){

	extract($_POST); // == $_POST["email"] -> $email, etc

	// $email = $_POST['email'];
	// $password = $_POST['password'];

	if(!empty($email) && !empty($password) && !empty($confirmed_password)){

		// ajouter les informations d'un utilisateur à la BD (inscription d'un utilisateur)
		include "database.php";
		global $db;

		// requete préparée pour vérifier si l'email qu'on a saisi existe déja ds la BD
		$requete1 = $db -> prepare("SELECT email FROM utilisateur WHERE email = :email");
		$requete1 -> execute(["email" => $email]);
		$result = $requete1 -> rowCount(); // compter le nb de resultats de la requete1

		// si l'email qu'on a saisi existe déja ds la BD
		if ($result == 1) {

			echo "<script>alert(\"Un utilisateur avec l'email ". $email ." existe dejà! Veuillez utiliser un autre email.\")</script>";
		}

		else {
			// si les 2 mots de passe correspondent
			if ($password == $confirmed_password){

				// requete préparée pour ajouter l'email et le password saisies à la BD
				$requete2 = $db -> prepare("INSERT INTO utilisateur(email, password) VALUES (:email, :password)");
				$requete2 -> execute([
					"email" => $email,
					"password" => $password
					]);

				echo "<script>alert(\"Inscription réussite!\")</script>";
			}
			else {
				echo "<script>alert(\"Les deux mots de passe saisies ne correspondent pas!\")</script>";
			}
		}
	}

	// // requete pour afficher l'id et les pseudo des utilisateurs
	// $requete3 = $db -> query("SELECT * FROM utilisateur");
	// while($user = $requete3 -> fetch()){
	// 	echo "id: " . $user["id"] . " email: ". $user["email"] . "<br/>";
	// }
	//
	// // requete préparé pour ajouter un utilisateur
	// $requete4 = $db->prepare("INSERT INTO Utilisateur(email, password) VALUES (:email,:password)");
	// $requete4 -> execute([
	// 	"email" => "ali@outlook.com",
	// 	"password" => "ali123"
	// ]);
	// echo "L'utilisateur avec l'email ali@outlook.com a été ajouté avec succès.";
}
?>
</head>

<body>
	<!--navbar-->
    <nav class="row" aria-label="breadcrumb">

        <!--Page d'accueil-->
        <div class="col-1">
            <a class="navbar-brand" href="index.php">
                <img src="img/best-deal1.png" class="logoSupport" />
            </a>
        </div>

        <!--breadcrumb-->
        <div class="col-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Page d'accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Formulaire d'inscription</li>
            </ol>
        </div>

        <div class="col-6">
        </div>	

        <!--Support-->
		<div class="col-1">		
			<a class="btn btn-primary" href="support.html" role="button">Support</a>
		</div>
	</nav>

<!--Formulaire d'inscription-->
<div class="container">
	<div class="row">
		<div class="col-6" id="link-form">
      		<a href="formulaire_connexion.php" id="link"><i class="fas fa-arrow-left"></i> Formulaire de connexion</a>
    	</div>

	    <div  class="col-6">
			<h5>Formulaire d'inscription:</h5>
			<form class="form" method="post">
				<input type="email" name="email" id="email" placeholder="Entrez votre email" required><br/>
				<input type="password" name="password" id="password" size="30" placeholder="Entrez votre mot de passe" required><br/>
				<input type="password" name="confirmed_password" id="confirmed_password" size="30" placeholder="Entrez de nouveau votre mot de passe" required><br/>
				<input type="submit" name="formregister" id="formregister" value="S'inscrire">
			</form>
	    </div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

<footer>
    <div id="footer">
        <div id="element">
            <h5>Follow us</h5>
        </div>

        <div id="element">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        </div>

        <div id="element">
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        </div> 
    </div> 
</footer>
</html>