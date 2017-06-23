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
<?php
if(isset($_POST['go2'])){
	if(strlen($_POST["item"])!=0&& strlen($_POST["price"])!=0){
		$sql="UPDATE  menu SET price='$_POST[price]' WHERE item='$_POST[item]';";
		$conn->query($sql);
	}
	if(strlen($_POST["item1"])!=0&& strlen($_POST["price1"])!=0){
		$sql=" UPDATE  menu SET price='$_POST[price1]' WHERE item='$_POST[item1]';";
		$conn->query($sql);
	}
	if(strlen($_POST["item2"])!=0&& strlen($_POST["price2"])!=0){
		$sql=" UPDATE  MENU SET price='$_POST[price2]' WHERE item='$_POST[item2]';";
		$conn->query($sql);
	}
	if(strlen($_POST["item3"])!=0&& strlen($_POST["price3"])!=0){
		$sql=" UPDATE  MENU SET price='$_POST[price3]' WHERE item='$_POST[item3]';";
		$conn->query($sql);
	}
	
	
	
}
$conn->close();
?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Insert Items</h4>
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="admin.php">Admin</a></li>
		<li><a href="insert.php">Insert</a></li>
		<li class="active"><a href="price.php">Price</a></li>
        <li><a href="order.php">Orders</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <h4><small>Recent feedback</small></h4>
      <hr>
	  
      <form action="price.php" method="POST">
	  
	  <label class="text-heading">Item</label>
	  <input type="text" name="item" />
	  <label class="text-heading">New Price</label>
	  <input type="text" name="price" />
	   
  <hr>
	  <label class="text-heading">Item</label>
	  <input type="text" name="item1" />
	  <label class="text-heading">New Price</label>
	  <input type="text" name="price1" />
	  	  <hr>
	  
	  <label class="text-heading">Item</label>
	  <input type="text" name="item2" />
	  <label class="text-heading">New Price</label>
	  <input type="text" name="price2" />
	 	  <hr>
	  
	  <label class="text-heading">Item</label>
	  <input type="text" name="item3" />
	  <label class="text-heading">New Price</label>
	  <input type="text" name="price3" />
	    
	  <hr>
	<button style="margin-left:300px" type="submit" class="btn btn-secondary" name="go2" >Submit</button>
	  </form>
      <br></br>
     
        
    </div>
  </div>
</div>

<footer class="container-fluid">
</footer>

</body>
</html>
