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
if(isset($_POST['go'])){
	if(strlen($_POST["item"])!=0&& strlen($_POST["price"])!=0){
		$sql="INSERT INTO MENU VALUES('$_POST[item]','$_POST[price]','$_POST[type]');";
		$conn->query($sql);
	}
	if(strlen($_POST["item1"])!=0&& strlen($_POST["price1"])!=0){
		$sql="INSERT INTO MENU VALUES('$_POST[item1]','$_POST[price1]','$_POST[type1]');";
		$conn->query($sql);
	}
	if(strlen($_POST["item2"])!=0&& strlen($_POST["price2"])!=0){
		$sql="INSERT INTO MENU VALUES('$_POST[item2]','$_POST[price2]','$_POST[type2]');";
		$conn->query($sql);
	}
	if(strlen($_POST["item3"])!=0&& strlen($_POST["price3"])!=0){
		$sql="INSERT INTO MENU VALUES('$_POST[item3]','$_POST[price3]','$_POST[type3]');";
		$conn->query($sql);
	}
	
	
	
}
$conn->close();
?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Insert</h4>
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="admin.php">Admin</a></li>
		<li class="active"><a href="insert.php">Insert</a></li>
		<li><a href="price.php">Price</a></li>
        <li ><a href="order.php">Orders</a></li>
      </ul><br>
    </div>
	

    <div class="col-sm-9">
      <h4><small>Insert</small></h4>
      <hr>
	  <form action="insert.php" method="POST">
	  
	  <label class="text-heading">Item</label>
	  <input type="text" name="item" />
	  <label class="text-heading">Price</label>
	  <input type="text" name="price" />
	  <label class="text-heading">Type</label>
	    <select  name="type">
    <option value="eatery">Eatery</option>
    <option value="drinks">Drinks</option>
  </select>
  <hr>
	  <label class="text-heading">Item</label>
	  <input type="text" name="item1" />
	  <label class="text-heading">Price</label>
	  <input type="text" name="price1" />
	  <label class="text-heading">Type</label>
<select name="type1">
    <option value="eatery">Eatery</option>
    <option value="drinks">Drinks</option>
  </select>	  <hr>
	  
	  <label class="text-heading">Item</label>
	  <input type="text" name="item2" />
	  <label class="text-heading">Price</label>
	  <input type="text" name="price2" />
	  <label class="text-heading">Type</label>
<select name="type2">
    <option value="eatery">Eatery</option>
    <option value="drinks">Drinks</option>
  </select>	  <hr>
	  
	  <label class="text-heading">Item</label>
	  <input type="text" name="item3" />
	  <label class="text-heading">Price</label>
	  <input type="text" name="price3" />
	  <label class="text-heading">Type</label>
<select name="type3">
    <option value="eatery">Eatery</option>
    <option value="drinks">Drinks</option>
  </select>	  
	  <hr>
	<button style="margin-left:300px" type="submit" class="btn btn-secondary" name="go" >Submit</button>
	  </form>
      <br><br>
      
     
        
    </div>
  </div>
</div>

<footer class="container-fluid">
</footer>

</body>
</html>
