<?php


include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>order food from canteen</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
	
	
    </style>

</head>

<body >

    <div class="tagline-upper text-center text-heading text-shadow mt-4 hidden-md-down" color="green">FOOD 4 U</div>
        <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4" >
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="#">Food 4 U</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="signup.php">Sign up</a>
                    </li>
					 <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="login.php">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="bg-faded p-4 my-4">
            <!-- Image Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid w-100"height="200" src="img/slide-1.jpg" alt="">
                        
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100"height="200" src="img/slide-2.jpg" alt="">
                        
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100"height="200" src="img/slide-3.jpg" alt="">
                       
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Welcome Message -->
            <div class="text-center mt-4">
                <div class="text-heading  text-lg">Welcome To</div>
                <h1 class="my-2">Food 4 U</h1>
                <div class="text-heading text-lg">By <strong>Piyush</strong></div>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Build a website <strong>worth visitng</strong></h2>
            <hr class="divider">
            <img class="img-fluid float-left hidden-md-down mr-lg-4" src="img/intro-pic.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit totam libero expedita magni est delectus pariatur aut, aperiam eveniet velit cum possimus, autem voluptas. Eum qui ut quasi voluptate blanditiis?</p>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Beautiful boxes to <strong>showcase your content</strong></h2>
            <hr class="divider">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
        </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
        <div class="container">
            <p class="m-0">Copyright &copy; Your Website 2017</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
