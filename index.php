<?php   
    session_start();  //démarrer une session

    // ajouter un cookie
    setcookie("pseudo", "Bahaeddin", time() + (24 * 3600)); // cookie qui stocke le pseudo de l'utilisateur (clé cookie, valeur cookie, durée cookie(cookie dure 1 jour))

    // ajouter un autre cookie
    setcookie("id", "3", time() + 3600); // cookie qui stocke le pseudo de l'utilisateur (clé cookie, valeur cookie, durée cookie(cookie dure 1 heure))

    /*
    // supprimer cookie
    setcookie("pseudo", '', time());  // time(): temps actuel

    // vérifier si un cookie existe
    if (isset($_COOKIE["pseudo"])) {
        echo "Le cookie ". $_COOKIE["pseudo"] . " existe bien.";
    }
    else {
        echo "Le cookie n'existe pas.";
    }

    //var_dump($_COOKIE); // afficher la valeur du cookie
    */

    //vider une session
    session_unset();

    //détruire une session
    session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Main page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>

<body>
    <nav class="row navbar sticky-top navbar-dark bg-dark">     <!--navbar-->
            <div class="col-sm-3  text-left">
                <a class="navbar-brand" href="index.php">
                    <img src="img/best-deal1.png" class="logo" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <!--toggler button-->
                </button>
            </div>

            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <!--search bar-->
                    <input class="form-control" type="text" placeholder="Search">
                    <button class="btn btn-outline-light" type="button">Search</button>
                </div>
            </div>

            <div class="col-sm-3 text-right">
                <a type="button" class="btn btn-outline-info" href="">My GitHub</a>
                <!--sign-in button-->   
                <button type="button" class="btn btn-link " data-toggle="modal" data-target="#modalSignIn"> 
                    <a href="formulaire_connexion.php"><i class="fas fa-sign-in-alt"></i></a>
                </button>

                <!--sign-up button-->
                <button type="button" class="btn btn-link">
                    <a href="formulaire_inscription.php"><i class="fas fa-user"></i></a>
                </button>
            </div>
    </nav>


    <div class="collapse" id="navbarToggleExternalContent">     <!--navbar collapse-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <!--dropdown buttons-->
                <div class="btn-group" role="group">
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Electronics
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Cell Phones & Smart watches</a>
                        <a class="dropdown-item" href="#">Computers, Tablets & Accessories</a>
                        <a class="dropdown-item" href="#">Digital cameras & Camera Drones</a>
                        <a class="dropdown-item" href="#">Headphones</a>
                        <a class="dropdown-item" href="#">Consoles & Video games</a> <a class="dropdown-item"
                            href="#">TV & Home Audio</a>
                        <a class="dropdown-item" href="#">Vehicle Electronics & GPS</a>
                        <a class="dropdown-item" href="#">Kitchen & Home</a>
                        <a class="dropdown-item" href="#">Security & Surveillance</a>
                        <a class="dropdown-item" href="#">Vapes</a>
                        <a class="dropdown-item" href="#">Accessories & Supplies</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Movies & Music
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Movies</a>
                        <a class="dropdown-item" href="#">Music</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Clothing
                    </button>
                    <div class="dropdown-menu"> <a class="dropdown-item" href="#">Men's Clothing</a>
                        <a class="dropdown-item" href="#">Women's Clothing</a>
                        <a class="dropdown-item" href="#">Boys Clothing</a>
                        <a class="dropdown-item" href="#">Girls Clothing</a>
                        <a class="dropdown-item" href="#">Babys Clothing</a>
                        <a class="dropdown-item" href="#">Fancy Dress</a>
                        <a class="dropdown-item" href="#">Luggage</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Home & Garden
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">DIY</a>
                        <a class="dropdown-item" href="#">Pet supplies</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Health & Care
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Men's Clothing</a>
                        <a class="dropdown-item" href="#">Women's Clothing</a>
                        <a class="dropdown-item" href="#">Boys Clothing</a>
                        <a class="dropdown-item" href="#">Girls Clothing</a> <a class="dropdown-item" href="#">Babys
                            Clothing</a>
                        <a class="dropdown-item" href="#">Fancy Dress</a>
                        <a class="dropdown-item" href="#">Luggage</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Automotive
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Car Care</a>
                        <a class="dropdown-item" href="#">Accessories</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Sport & Leisure
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Fitness</a>
                        <a class="dropdown-item" href="#">Accessories</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Toys
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">LEGO</a>
                        <a class="dropdown-item" href="#">Games</a>
                        <a class="dropdown-item" href="#">Action figures</a>
                        <a class="dropdown-item" href="#">Dolls</a>
                    </div>
                </div>

                <button type="button" class="btn"><a href="support.html" class="text-decoration-none">Support</a></button>
            </div>
        </nav>
    </div>

    <!--container-->
    <div class="container">     
        <div class="row">   <!--ligne 1-->
                  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">    <!--carousel-->
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="20000">
                                <img src="img/ecommerce-shipping-logistics1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="h1"> We ship all around the world! </h3>
                                </div>
                            </div>
                            <div class="carousel-item" data-interval="1000">
                                <img src="img/sale1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                    </div>
        </div>

        <h3>Browse by categories:</h3>
        <div class="row">   <!--ligne 2-->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">    <!--carousel-->
                <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="img/electronics.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <div class="badge badge-light text-wrap" style="width: 8rem;">
                                <h5> Electronics </h5>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img src="img/sport1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="badge badge-light text-wrap" style="width: 8rem;">
                                    <h5> Sports </h5>
                                </div>
                            </div>
                      </div>

                      <div class="carousel-item">
                          <img src="img/clothes.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                                <div class="badge badge-light text-wrap" style="width: 8rem;">
                                    <h5> Cosmetics </h5>
                                </div>
                            </div>
                      </div>

                      <div class="carousel-item">
                            <img src="img/car1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                  <div class="badge badge-light text-wrap" style="width: 8rem;">
                                      <h5> Automotive </h5>
                                  </div>
                              </div>
                        </div>

                        <div class="carousel-item">
                                <img src="img/house&garden.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                      <div class="badge badge-light text-wrap" style="width: 8rem;">
                                          <h5> House & Garden </h5>
                                      </div>
                                  </div>
                            </div>

                            <div class="carousel-item">
                                    <img src="img/toys.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                          <div class="badge badge-light text-wrap" style="width: 8rem;">
                                              <h5> Toys </h5>
                                          </div>
                                      </div>
                            </div>

                  </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
            </div>
        </div>

        <h3>Top deals:</h3>
        <div class="row">   <!--ligne 3-->

            <div class="col-4">
                <img src="img/router.jpg" class="rounded float-left" alt="...">
                <table class="table">
                <tbody>
                      <tr>
                        <td>TP-Link AC1200 Smart WiFi Router</td>
                      </tr>

                      <tr>
                        <td>5GHz Gigabit Dual Band</td>
                      </tr>
                      <tr>
                        <td>Wireless Internet router</td>
                      </tr>
                      <tr>
                        <td>Old price: $49.99</td>
                      <tr>

                      <tr>
                      <td>New price: $39.99 </td>
                        </tr>

                    <tr>
                        <td>You Save: $10.00 (20%)</td>
                    <tr>

                    </tbody>
                </table>

            </div>

            <div class="col-4">
                <img src="img/oil diffuser.jpg" class="rounded float-center" alt="...">
                <table class="table">
                <tbody>

                      <td>URPOWER 400ml Wood Grain Essential Oil Diffuser</td>
                    </tr>
                    <tr>
                      <td>Old price: $$29.99 </td>
                    </tr>
                    <tr>
                      <td>New price: $19.99</td>
                    <tr>

                  </tbody>
              </table>
            </div>

            <div class="col-4">
                <img src="img/cell phone charger.jpg" class="rounded float-right" alt="...">
                <table class="table">
                <tbody>
                <tr>
                    <td>Anker PowerCore II 10000</td>
                  </tr>
                  <tr>
                    <td>Ultra-Compact 10000mAh Portable Charger</td>
                  </tr>
                  <tr>
                    <td>Upgraded PowerIQ 2.0 (up to 18W Output)</td>
                  <tr>
                <tr>
                    <td>Fast Charge for iPhone, Samsung Galaxy and More </td>
                <tr>
                    <td>Old price: $35.99</td>
                  </tr>
                  <tr>
                    <td>New price: $30.40 </td>
                </tr>

                </tbody>
            </table>
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