<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Produit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
        <?php
        $plop = $_GET['MyproductId'];
        echo $plop;
        $user = "admin";
        $pass = "NekoJackals";

        $db = new PDO('mysql:host=localhost;dbname=Boutique', $user, $pass);

        $all=$db->query("SELECT * FROM Test WHERE id='$plop'")->fetch();
        print_r($all);
?>
        <div class="fluid-container">
            <header>
            <div class="row header">
                <div class="order-sm-1 col-sm-12 order-md-2 col-md-4">
                    <img src="img/logo.png" alt="logo" class="logo">
                </div>
                <div class="order-sm-2 col-sm-12 order-md-1 col-md-4">
                    <h1>Lorem</h1>
                </div>
                <div class="order-sm-3 col-sm-12 col-md-4">
                    <h2>Lorem ipsum dolor sit amet</h2>
                </div>
                <div class="order-sm-4 col-sm-12">
                    <p><i class="fas fa-phone"></i>00.00.00.00.00</p>
                </div>
                <div class="order-sm-5 col-sm-12">
                    <label for="search"><i class="fas fa-search"></i></label>
                    <input type="text" name="search" id="search">
                </div>
            </div>
            <div class="row nav">
                <nav class="navbar navbar-expand-md navbar-dark">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="home nav-link" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Qui sommes nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Commander</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nos garanties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Média</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
            <div class="row cart">
                <a href="panier.html"><i class="fas fa-shopping-cart"></i></a>
                <i class="fas fa-trash"></i>
            </div>
            </header>
            <main>
            <div class="row homediv" id="theProduit">

            </div>
        </main>
        <footer>
        <div class="row">
        <div class="col-sm-12 col-md-3 contact">
            <div class="col-sm-12">
                <h3>Nous contacter</h3>
            </div>
            <div class="col-sm-12 col-md-3">
                <i class="fas fa-map-marker-alt"></i>
                <p>00 rue fictive 00000 VILLE</p>
            </div>
            <div class="col-sm-12 col-md-3">
                <i class="fas fa-desktop"></i>
                <p>www.adresseweb.com</p>
            </div>
            <div class="col-sm-12 col-md-3">
                <i class="fas fa-phone"></i>
                <p>00.00.00.00.00</p>
            </div>
            <div class="col-sm-12 col-md-3">
                <i class="far fa-envelope"></i>
                <p>boutique@mail.com</p>
            </div>
        </div>

            <div class="col-sm-12 col-md-3 follow">
                <div class="col-sm-12">
                    <h3>Nous suivre</h3>
                </div>
                <div class="col-sm-12 col-md-3">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="col-sm-12 col-md-3">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="col-sm-12 col-md-3">
                    <i class="fab fa-pinterest-p"></i>
                </div>
                <div class="col-sm-12 col-md-3">
                    <i class="fab fa-tumblr"></i>
                </div>
            </div>
            <div class="md-order-2 col-md-3 col-sm-12 renav">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Qui sommes nous ?</a></li>
                    <li><a href="#">Commander</a></li>
                    <li><a href="#">Produits</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Nos garanties</a></li>
                    <li><a href="#">Média</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 info">
                <h3>Informations générales</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="row">
            <p><i class="far fa-copyright"></i>2017 GROUPE PERJD- POWERED BY perr-jd tous droits réservés</p>
        </div>
        </footer>
        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/catalog_x1.js"></script>
    <script src="js/panier.js"></script>
    <script src="js/script_produit.js"></script>
    </body>
</html>
