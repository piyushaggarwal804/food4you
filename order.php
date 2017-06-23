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
      <h4>Order Page</h4>
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="admin.php">Admin</a></li>
			<li><a href="insert.php">Insert</a></li>
		<li><a href="price.php">Price</a></li>
        <li class="active"><a href="order.php">Orders</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <h4><small>Order</small></h4>
	  <form action="order.php" method="POST">
	  <?php
	  
	  $sql="select distinct username from list;";
	  $result=$conn->query($sql);
	  if($result->num_rows>0){
		  
		  while($row=$result->fetch_assoc()){
			  $y=1;
		  if(isset($_POST["go"])==$y){
				 $sql5="delete from list where username= '$row[username]';"; 
$conn->query($sql5)	;			 
				  
				  
				  
			  }
			  ?>
      <hr>
	  
      <?php 
	  $sql1="select name from signup where username='$row[username]';";
	  $result1=$conn->query($sql1);
	  
		  $row1=$result1->fetch_assoc();
			 
		  
	  ?>
	  
	  
     
	  <table class="table  table-inverse table-hover" >
	<caption><?php echo $row1['name']; ?></caption>
  <thead>
    <tr>
      <th>#</th>
      <th>ITEMS</th>
      <th >QUANTITY</th>
    </tr>
  </thead>
  <tbody>
   
	<?php 
	  $sql2="select * from list,menu where username='$row[username]' && list.item=menu.item;";
	  $result2=$conn->query($sql2);
	 
	  if ($result2->num_rows > 0) {
		// output data of each row
		$x=1;
		while($row2 = $result2->fetch_assoc()) {
			echo"
       <tr><th scope='row'>".$x."</th>
      <td>".$row2["item"]."</td>
      <td>".$row2["quantity"]."</td>
	  
    </tr>";
	
	
	$x+=1;
	  }
	  
	  
	  }?>
	
    
  </tbody>
</table>
<?php
echo "<button class='btn-primary' type='submit' name='go' value=".$y.">Done</button>";


 $y+=1;
	  }
	  }
	  
	  
	  $conn->close();
	  ?>
      <br><br>
      
     
        </form>
    </div>
  </div>
</div>

<footer class="container-fluid">
</footer>

</body>
</html>
