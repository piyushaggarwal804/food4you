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

    <title>Business Casual - Start Bootstrap Theme</title>

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
    </style>

</head>

<body>

    <div class="tagline-upper text-center text-heading text-shadow  mt-4 hidden-md-down">FOOD 4 U</div>

    <!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
<div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="#">Food 4 U</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="index.php">Home </a>
                    </li>
                    <li class="nav-item  px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="signup.php">Sign up</a>
                    </li>
					 <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="login.php">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  

        <div class="bg-faded p-4 my-4" style="width:40%; margin:auto">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0"> Sign<strong>up</strong></h2>
            <hr class="divider">
			<?php

	if(isset($_POST['submit'])){

		$sql = "INSERT INTO signup VALUES ('$_POST[name]', '$_POST[user]','_POST[email]', '$_POST[phone]','$_POST[pass]')";
		$pass1=$_POST["pass"];
		$pass2=$_POST["pass2"];
		if(strlen($pass1)>=4){
			if($pass1===$pass2)
			{if($conn->query($sql))
				{  
					echo "<strong style= 'font-size:20px; color:green' >"."Welcome " .$_POST["name"]."<br>". "Your account created Successfully!" ."</strong>";
					header('location:login.php');
				}


				else {
					echo "<strong style='font-size:20px; color:red'>Sorry !!! This  user name has already signed up</strong>";
				}
			}

			else{
				echo "<strong style= 'font-size:20px ;color:red' >Passwords do not match try again!!!</strong>";
			}
		}

		else{
			echo "<strong style='font-size:20px; color:red'>"."Password too short!!! must be greater than or equal to 4 characters</strong>";
		}
	}
	$conn->close();

	?>
            <form align="center" action="signup.php" method="POST">
			
			      <div class="row">
			         <div class="form-group col-lg-3"></div>
                                    <div class="form-group col-lg-6">
                        <label class="text-heading">Name</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
					</div>
					 <div class="row">
			         <div class="form-group col-lg-3"></div>
                    <div class="form-group col-lg-6">
                        <label class="text-heading">User name</label>
                        <input type="text" class="form-control" name="user">
                    </div></div><div class="row">
			         <div class="form-group col-lg-3"></div>
                    <div class="form-group col-lg-6">
                        <label class="text-heading">email id</label>
                        <input type="email" class="form-control" name="email">
                    </div></div>

					 <div class="row">
			         <div class="form-group col-lg-3"></div>
                    <div class="form-group col-lg-6">
                        <label class="text-heading">Phone Number</label>
                        <input type="tel" class="form-control" name="phone">
                    </div></div>
					 <div class="row">
			         <div class="form-group col-lg-3"></div>
					<div class="form-group col-lg-6">
                        <label class="text-heading">Password</label>
                        <input type="password" class="form-control" name="pass">
                    </div></div>
					 <div class="row">
			         <div class="form-group col-lg-3"></div>
					<div class="form-group col-lg-6">
                        <label class="text-heading"  >confirm password</label>
                        <input type="password" class="form-control" name="pass2">
                    </div></div>
                    <div class="clearfix"></div>

                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-secondary" name="submit" >Submit</button>
                    </div>
					
                
            </form>
			
			
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

    <!-- Zoom when clicked function for Google Map -->
    <script>
    $('.map-container')
        .click(function() {
            $(this).find('iframe').addClass('clicked')
        })
        .mouseleave(function() {
            $(this).find('iframe').removeClass('clicked')
        });
    </script>

</body>

</html>
