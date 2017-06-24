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

    <div class="tagline-upper text-center text-heading text-shadow mt-4 hidden-md-down">FOOD 4 U</div>

    <!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
             <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="#">Food 4 U</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">
				<?php
				if(logged_in()){?>
				       <ul class="navbar-nav mx-auto">
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="menu.php">Menu </a>
                    </li>
                    <li class="nav-item  px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="cart.php">cart</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="payment.php">payment</a>
                    </li>
					 <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="logout.php">Log out</a>
                    </li>
                </ul>
									<li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="#">(
						<?php 
						$sql="select name from signup where username='$_SESSION[user]';";
						$result=$conn->query($sql);
						if ($result->num_rows > 0) {
			// output data of each row

			while($row = $result->fetch_assoc()) {
				echo strtoupper($row['name']);
						}}?>
						
						
						
						)
						</a>
                    </li><?php } else {?>
				
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
                    </li>
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="signup.php">Sign up</a>
                    </li>
					 <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="login.php">Log in</a>
                    </li>
				<?php }?>
                </ul>
            </div>
        </div>
    
    </nav>
	
	<?php
	if(isset($_POST['sub'])){
		$sql1="select name from signup where username='$_SESSION[user]';";
		$resultz=$conn->query($sql1);
		$rowz=$resultz->fetch_assoc();
		
		$sql="insert into feedback values('$rowz[name]','$_POST[about]','$_POST[message]');";
		$conn->query($sql);	
	}
	  echo "<form action='feedbacksub.php' method='POST'><div class='container'>

        <div class='bg-faded p-4 my-4'>
            <div class='card card-inverse'>
                
               
                    <h2 class='card-title text-shadow text-uppercase mb-0' style='color:black'>";
						$sql="select name from signup where username='$_SESSION[user]';";
						$result=$conn->query($sql);
						if ($result->num_rows > 0) {
			// output data of each row

			while($row = $result->fetch_assoc()) {
				echo strtoupper($row['name']);
						}}
						echo "</h2>
                    <h4  style='color:black'><input type='text' name='about' placeholder='about' required/></h4>
                    <p class='hidden-md-down' style='color:black'><textarea name='message' rows='5' cols='40'></textarea></p>
					<div class='row'>
					<div class='col-lg-1 col-md-1'>
					</div>
					<div>
                    <button  style:'width=250px' class ='btn-primary' type='submit' name='sub' >Comment</button>
					</div>
					</div>
               
            </div>
        </div>

       


    </div></form>";
$sql="select * from feedback order by date desc;";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) {
    echo "<div class='container'>

        <div class='bg-faded p-4 my-4'>
            <div class='card card-inverse'>
                
               
                    <h2 class='card-title text-shadow text-uppercase mb-0' style='color:black'>".$row["name"]."</h2>
                    <h4  style='color:black'>".$row["about"]."</h4>
                    <p class='hidden-md-down' style='color:black'>".$row["message"]."</p>
            
               
            </div>
        </div>

       


    </div>";
	}
	
	
	}
	$conn->close();
	
	?>
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
