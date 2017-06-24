<?php
include("connect.php");
$sql="select distinct username from list;";
	  $result=$conn->query($sql);
	  if($result->num_rows>0){
	   $z=1;
			 while($rowz=$result->fetch_assoc()){
			   if(isset($_POST['submit'])){
                if(isset($_POST['check_list'][$z])){
					$sql2="select email from signup where username='rowz[username]';";
					$result2=$conn->query($sql2);
					$row=$result2->fetch_assoc();
					$to=$row['email'];
					echo $to;
	        $sql5="delete from list where username= '$rowz[username]';"; 
				$conn->query($sql5)	;
         $subject = "";
         
         $message = "<b>your order is ready.</b>";
         
         $header = "From:foodfouru@gmail.com \r\n";
         $header .= "Cc:ayushmehta804@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      
				}
				
			   }
			  $z+=1;
			  }
	  }
	  
	 // header('location:order.php');
	  
$conn->close();
	  ?>