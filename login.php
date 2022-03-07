<?php
include ("connection.php");
?>

<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login.css">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	 <nav class="navbar navbar-inverse">
	   <div class="container-fluid">
	     <div class="navbar-header">
	       <a class="navbar-brand" href="#"><span class="glyphicon">&#xe212;</span>&nbsp;<font face = "Times New Roman" size = "5"><b>BODY POWER FITNESS CLUB</b></font></a>
	     </div>
	     <ul class="nav navbar-nav">
	       <li><a href="index.php">Home</a></li>
	       <li><a href="contactus.php">Contact Us</a></li>
	       <li><a href="aboutus.php">About us</a></li>
	       <li><a href="facilities.php">Facilities</a></li>
		   <li><a href="#">Login</a></li>
	     </ul>
	   </div>
	 </nav>
  </head>
  <body>
 <h1><title>Membership Form</title>
	<link rel="stylesheet" type="text/css" href="index.css">
     <form action="#" method="POST">
           <marquee behavior="scroll"  direction="left" scrollamount="20">
     		  <img src="https://wallpaperaccess.com/full/1108004.jpg" height="200" width="450">
     		  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQRo9gwWhBG7RM0gcbyBGUPdNoGZjnvNxsTQ&usqp=CAU.jpg" height="200" width="450">
     		  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlPZtU0y_dPX1By3E2BMzdLSXtiMAll9d7LH3O4Xf0tSxui5gKatkPPiy0VWCuPfasUnc&usqp=CAU.jpg" height="200" width="450">
     		  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1zccEbhbwUds16de8kd_Nd0uXKiD7Q1DfCmwoy8UD9tO2PUJ-i5kLC0zS7IdJSRMJNgI&usqp=CAU.jpg" height="200" width="450">
     		  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWQaZwF2d2GUog0OXLV1q-KE-1uTcTlsVE4OEpWiUSnnS0Eh_YFwZuUkM5FkO37smNc-k&usqp=CAU.jpg" height="200" width="450">	
			</marquee>
			<body>    
      
    <form>  
        <div class="container">
		<center> <font face = "Times New Roman" size = "25"><b>BODY POWER FITNESS CLUB</b></font><br><br>    
		 <label>Registration No : </label>   
            <input type="text" placeholder="Registration No." name="rno" required><br><br>  
           <button type="submit" name="login">Login</button></center>      
        </div>   
    </form>     
</body>     
</html>  

<?php
//error_reporting(0);
	if($_POST['login'])
	{
		$rno = $_POST['rno'];
		$sql = "select * from gym where rno = '$rno'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center>Welcome Mr./Ms.".nm."</center></h1>";  
        }  
        else{  
            echo "<h1> Enter Valid Number</h1>";  
        }     
	}
?>


			<nav class="navbar navbar-inverse navbar-sticky-bottom">
	   <div class="container-fluid">
	   <div class="navbar-header">	
	   <a class="navbar-brand" href="#"><font face = "Times New Roman" size = "5">All Right Reserved to Body Power Fitness Club</font></a>
	</div>