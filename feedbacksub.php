<?php
include("connect.php");
	if(isset($_POST['sub'])){
		$sql1="select name from signup where username='$_SESSION[user]';";
		$resultz=$conn->query($sql1);
		$rowz=$resultz->fetch_assoc();
		$now = DateTime::createFromFormat('U.u', number_format(microtime(true), 6, '.', ''));
      $tm=$now->format("Y-m-d H:i:s.u");
		$sql="insert into feedback values('$rowz[name]','$_POST[about]','$_POST[message]','$tm');";
		$conn->query($sql);	
	}
	
	header('location:feedback.php');
	$conn->close();
	?>
	