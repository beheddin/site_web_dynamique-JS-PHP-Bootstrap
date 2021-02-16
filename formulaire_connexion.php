
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de connexion</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

<?php
// verifier si formulaire a été envoyé
if(isset($_POST['login'])){

  extract($_POST); // == $_POST["email2"] -> $email, etc

  if(!empty($email) && !empty($password)){

    include "database.php";
    global $db;

    // requete préparé pour vérifier si l'email qu'on a saisi existe déja ds la BD
    $requete = $db -> prepare("SELECT email, password FROM utilisateur WHERE email = :email AND password = :password");
    $requete -> execute([
      "email" => $email,
      "password" => $password
      ]);

    //method 1
    $result = $requete -> rowCount(); // compter le nb de resultats de la requete

    /*method 2
    $result = $requete -> fetch(); // convertir le resultat en un tableau
    if ($result == true)...*/


    if ($result == 0) {
      echo "<script>alert(\"L'utilisateur avec l'email ". $email ." n'existe pas ou le mot de passe saisie est incorrecte! Vérifiez vos identifiants de nouveau ou si vous n'avez pas de compte, utilisez le formulaire d'inscription.\")</script>";
    }
    else {
      echo "<script>alert(\"Connexion réussie!\")</script>";

      //on recupere les variables session
      $_SESSION["email"] = $result["email"];  
      $_SESSION["password"] = $result["password"];
    }
  }
}
?>

</head>

<body>
	<!--navbar-->
    <nav class="row" aria-label="breadcrumb">

        <!--Page d'accueil-->
        <div class="col-sm-1">
            <a class="navbar-brand" href="index.php">
                <img src="img/best-deal1.png" class="logoSupport"/>
            </a>
        </div>

        <!--breadcrumb-->
        <div class="col-sm-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                	<a href="index.php">Page d'accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Formulaire de connexion</li>
            </ol>
        </div>

        <div class="col-sm-6">
        </div>	

        <!--Support-->
		<div class="col-sm-1">		
			<a class="btn btn-primary" href="support.html" role="button">Support</a>
		</div>
	</nav>

<!--Formulaire de connexion-->
<div class="container">
	<div class="row">
			<div  class="col text-center">
				<h4>Login page</h4>
		</div>
	</div>
	<br/>
	<div class="row">
	  <div  class="col-6">
	  	<h5>Formulaire de connexion:</h5>
			<form class="form" method="post">
				<input type="email" name="email" id="email" placeholder="Entrez votre email" required><br/>
				<input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required><br/>
				<input type="submit" name="login" id="login" value="Se connecter">
			</form>
	  </div>

    <div class="col-6" id="link-form">
      <a href="formulaire_inscription.php" id="link">Formulaire d'inscription <i class="fas fa-arrow-right"></i></a>
    </div>
	</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

<footer>
  <div id="footer">
    <div id="element">
      <h6>Follow us</h6>
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
