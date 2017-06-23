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
					<li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="#">(
						<?php 
						$sql="select name from signup where username='$_SESSION[user]';";
						$result=$conn->query($sql);
						if ($result->num_rows > 0) {
			// output data of each row

			while($row = $result->fetch_assoc()) {
				echo strtoupper($row['name']);
						}}?>)
						
						
						
						
						</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<?php
if(isset($_POST['cart'])){
    
	    $sql="select * from menu where type = 'eatery';";
		$result=$conn->query($sql);
		if($result->num_rows>0){
			$x=1;
			while($row=$result->fetch_assoc()){
					$amount=$_POST['quant'][$x];
				if($amount==0){
				
				$sqla="delete from cart where username='$_SESSION[user]' and item='$row[item]';";
				$conn->query($sqla);
				
				}
				else{
				    $sqla="select * from cart where username='$_SESSION[user]' and item='$row[item]';";
					$resulta=$conn->query($sqla);
					if($resulta->num_rows>0){
					$sql1="delete from cart where username='$_SESSION[user]' and item='$row[item]';";
				      $conn->query($sql1);
				
						}
					
					$sql1="insert into cart values('$_SESSION[user]','$row[item]','$amount');";
					$conn->query($sql1);
					}
					
					
				
				
				$x+=1;
			}
			
			}
	  $sql="select * from menu where type = 'drinks';";
		$result=$conn->query($sql);
		if($result->num_rows>0){
			$x=100;
			while($row=$result->fetch_assoc()){
					$amount=$_POST['quant'][$x];
				if($amount==0){
				$sqla="delete from cart where username='$_SESSION[user]' and item='$row[item]';";
				$conn->query($sqla);
				
				}
				else{
				    $sqla="select * from cart where username='$_SESSION[user]' and item='$row[item]';";
					$resulta=$conn->query($sqla);
					if($resulta->num_rows>0){
					$sql1="delete from cart where username='$_SESSION[user]' and item='$row[item]';";
				      $conn->query($sql1);
				
						}
					
					$sql1="insert into cart values('$_SESSION[user]','$row[item]','$amount');";
					$conn->query($sql1);
					}
					
					
				
				
				$x+=1;
			}
			
			}
		
			
		
	header('location:cart.php');		
}
				
			
			?>
    <div class="container">
   <form action="menu.php" method="POST">
        

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0"><strong>Menu</strong></h2>
            <hr class="divider">
			<span style="color:white; margin:auto; background-color:rgb(41,43,44); border-top:2px solid white; border-right:2px solid white; font-size:30px;">EATERY</span>
    <table class="table  table-inverse table-hover" >
	
  <thead>
    <tr>
      <th>#</th>
      <th>ITEMS</th>
      <th>PRICE</th>
      <th style="width:13.5%">QUANTITY</th>
    </tr>
  </thead>
  <tbody>
   
	<?php 
	  $sql="select * from menu where type='eatery';";
	  $result=$conn->query($sql);
	  if ($result->num_rows > 0) {
		// output data of each row
		$x=1;
		while($row = $result->fetch_assoc()) {
			
			$sql1="select quantity from cart where cart.item='$row[item]' and username='$_SESSION[user]';";
			$result1=$conn->query($sql1);
			if($result1->num_rows>0){
				while($row1 = $result1->fetch_assoc()) {
							echo"
       <tr><th scope='row'>".$x."</th>
      <td>".$row["item"]."</td>
      <td>".$row["price"]."</td>
      <td><div class='center'>
<div class='input-group'>
          <span class='input-group-btn'>
              <button type='button' class='btn btn-danger btn-number'  data-type='minus' data-field='quant[".$x."]'>
                <span class='glyphicon glyphicon-minus'>-</span>
              </button>
          </span>
          <input  type='text' name='quant[".$x."]' class='form-control input-number' value='".$row1["quantity"]."' min='0' max='100'>
          <span class='input-group-btn'>
              <button type='button' class='btn btn-success btn-number' data-type='plus' data-field='quant[".$x."]'>
                  <span class='glyphicon glyphicon-plus'>+</span>
              </button>
          </span>
      </div>
	
</div></td>

	  
				</tr>";}
			}
			else{
			echo"
       <tr><th scope='row'>".$x."</th>
      <td>".$row["item"]."</td>
      <td>".$row["price"]."</td>
      <td><div class='center'>
<div class='input-group'>
          <span class='input-group-btn'>
              <button type='button' class='btn btn-danger btn-number'  data-type='minus' data-field='quant[".$x."]'>
                <span class='glyphicon glyphicon-minus'>-</span>
              </button>
          </span>
          <input  type='text' name='quant[".$x."]' class='form-control input-number' value='0' min='0' max='100'>
          <span class='input-group-btn'>
              <button type='button' class='btn btn-success btn-number' data-type='plus' data-field='quant[".$x."]'>
                  <span class='glyphicon glyphicon-plus'>+</span>
              </button>
          </span>
      </div>
	
</div></td>

	  
    </tr>";
			}
	$x+=1;
	  }
	  
	  
	  }
	  ?>
    
  </tbody>
</table>



<span style="color:white; margin:auto; background-color:rgb(41,43,44); border-top:2px solid white; border-right:2px solid white; font-size:30px;">DRINKS</span>
      <table class="table  table-inverse table-hover" >
	
  <thead>
    <tr>
      <th>#</th>
      <th>ITEMS</th>
      <th>PRICE</th>
      <th style="width:13.5%">QUANTITY</th>
    </tr>
  </thead>
  <tbody>
   <?php 
	  $sql="select * from menu where type='drinks';";
	  $result=$conn->query($sql);
	  if ($result->num_rows > 0) {
		// output data of each row
		$x=100;
		while($row = $result->fetch_assoc()) {
			
			$sql1="select quantity from cart where cart.item='$row[item]' and username='$_SESSION[user]';";
			$result1=$conn->query($sql1);
			if($result1->num_rows>0){
				while($row1 = $result1->fetch_assoc()) {
							echo"
       <tr><th scope='row'>".$x."</th>
      <td>".$row["item"]."</td>
      <td>".$row["price"]."</td>
      <td><div class='center'>
<div class='input-group'>
          <span class='input-group-btn'>
              <button type='button' class='btn btn-danger btn-number'  data-type='minus' data-field='quant[".$x."]'>
                <span class='glyphicon glyphicon-minus'>-</span>
              </button>
          </span>
          <input  type='text' name='quant[".$x."]' class='form-control input-number' value='".$row1["quantity"]."' min='0' max='100'>
          <span class='input-group-btn'>
              <button type='button' class='btn btn-success btn-number' data-type='plus' data-field='quant[".$x."]'>
                  <span class='glyphicon glyphicon-plus'>+</span>
              </button>
          </span>
      </div>
	
</div></td>

	  
				</tr>";}
			}
			else{
			echo"
       <tr><th scope='row'>".$x."</th>
      <td>".$row["item"]."</td>
      <td>".$row["price"]."</td>
      <td><div class='center'>
<div class='input-group'>
          <span class='input-group-btn'>
              <button type='button' class='btn btn-danger btn-number'  data-type='minus' data-field='quant[".$x."]'>
                <span class='glyphicon glyphicon-minus'>-</span>
              </button>
          </span>
          <input  type='text' name='quant[".$x."]' class='form-control input-number' value='0' min='0' max='100'>
          <span class='input-group-btn'>
              <button type='button' class='btn btn-success btn-number' data-type='plus' data-field='quant[".$x."]'>
                  <span class='glyphicon glyphicon-plus'>+</span>
              </button>
          </span>
      </div>
	
</div></td>

	  
    </tr>";
			}
	$x+=1;
	  }
	  
	  
	  }
	  $conn->close();
	  ?>
    
  </tbody>
</table>
<div class="row">
        <div class= "col-lg-10"></div>
		 <div class=" col-lg-2">
                        <button type="submit" class="btn btn-secondary btn-success" name="cart" >Add to Cart</button>
                    </div></div>
        </div>
		

</form>
		
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
	<script src="incdec.js"></script>

</body>

</html>
