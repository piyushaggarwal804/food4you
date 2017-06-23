<?php


include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Admin Page</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="admin.php">Admin</a></li>
			<li><a href="insert.php">Insert</a></li>
		<li><a href="price.php">Price</a></li>
        <li><a href="order.php">Orders</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <h4><small>Recent feedback</small></h4>
      <hr>
	  <?php 
	  $sql="select * from feedback order by date desc limit 10;";
	  $result=$conn->query($sql);
	  if($result->num_rows>0){
		  while($row=$result->fetch_assoc()){
			  echo "
      <h2>".$row["about"]."</h2>
      <h5><span class='glyphicon glyphicon-time'></span> Post by ".$row["name"].", ".(substr($row["date"],0,10))."</h5>
		  <p>".$row["message"]."</p>";
		  }
	  }
	  $conn->close();
	  ?>
      <br><br>
      
     
        
    </div>
  </div>
</div>

<footer class="container-fluid">
</footer>

</body>
</html>
