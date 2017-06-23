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
<?php
if(isset($_POST['payment'])){
$sql="select * from cart where username='$_SESSION[user]';";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	
		$sql1="insert into list(username,item,quantity) values('$row[username]','$row[item]','$row[quantity]');";
		$conn->query($sql1);

}
$sql2="delete from cart where username='$_SESSION[user]';";
$conn->query($sql2);

}}
?>

    <div class="tagline-upper text-center text-heading text-shadow mt-4 hidden-md-down" color="green">FOOD 4 U</div>
        <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4" >
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="#">Food 4 U</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item  px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="menu.php">Menu </a>
                    </li>
                    <li class="nav-item active px-lg-4">
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

    <div class="container">
   <form action="cart.php" method="POST">
        

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0"><strong>Cart</strong></h2>
            <hr class="divider">
			
    <table class="table  table-inverse table-hover" style="margin-bottom:0">
	
  <thead>
    <tr>
      <th>#</th>
      <th>ITEMS</th>
      <th>PRICE</th>
      <th >QUANTITY</th>
	  <th > TOTAL</th>
    </tr>
  </thead>
  <tbody>
   
	<?php 
	  $sql="select * from cart,menu where username='$_SESSION[user]' && cart.item=menu.item;";
	  $total=0;
	  $result=$conn->query($sql);
	  if ($result->num_rows > 0) {
		// output data of each row
		$x=1;
		while($row = $result->fetch_assoc()) {
			echo"
       <tr><th scope='row'>".$x."</th>
      <td>".$row["item"]."</td>
      <td>".$row["price"]."</td>
      <td>".$row["quantity"]."</td>
	  <td>".($row["price"]*$row["quantity"])."</td>

	  
    </tr>";
	$total+=($row["price"]*$row["quantity"]);
	
	$x+=1;
	  }
	  
	  
	  }
	  
	  $conn->close();
	  ?>
    
  </tbody>
</table>
<div class="row">
        <div class= "col-lg-9"></div>
		 <div class=" col-lg-3 ">
		 <span style="color:white; margin:auto; background-color:rgb(41,43,44); border-bottom:2px solid white; border-left:2px solid white;border-right:2px solid white; font-size:25px">Total:
                        <?php echo $total;?>
						</span>
                    </div></div>
					
							
<div class="row " style="margin-top:20px">
        <div class= "col-lg-10"></div>
		 <div class=" col-lg-2">
                        <button type="submit" class="btn btn-secondary btn-success" name="payment" >Go to Payment</button>
                    </div></div>
        </div>
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
