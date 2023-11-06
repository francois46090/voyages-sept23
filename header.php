<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de voyages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>    
    <!-- début  topbar -->
    <section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 coordonnees  pt-3 col-6" >
                    <ul class="d-flex justify-content-around">
                        <li><i class="bi bi-telephone-fill"></i> 01 23 45  67 89</li>
                        <li><i class="bi bi-envelope-fill"></i> contact@voyage.com</li>
                        <li><i class="bi bi-geo-alt-fill"></i> 30 rue de la république 
                            <br class="d-none display-mobile"><span class="ville">75000 Paris</span></li>
                    </ul>
                </div>
                <div class="col-md-4 d-flex  pt-3 col-6">
                    <!-- reseaux sociaux-->
                    <div class="social">
                        <ul class="d-flex">
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-linkedin"></i></li>
                        </ul>

                    </div>
                    <!-- bouton recherche-->
                    <div class="search-icon">
                        <button><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- fin topbar -->
    <!-- header -->

    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg col-md-10 offset-md-1">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php"><h3>VOYAGE</h3></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Destinations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>                                
                            </ul>
                           <a href="#" class="btn btn-primary">Je Réserve !</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>




    </header>