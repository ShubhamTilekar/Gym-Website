
<?php
include ("connection.php");
?>



<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	 <nav class="navbar navbar-inverse">
	   <div class="container-fluid">
	     <div class="navbar-header">
		 <a class="navbar-brand" href="#"><span class="glyphicon">&#xe212;</span>&nbsp;<font face = "Times New Roman" size = "5"><b>BODY POWER FITNESS CLUB</b></font></a>
		</div>
	     <ul class="nav navbar-nav">
	       <li><a href="#">Home</a></li>
	       <li><a href="contactus.php">Contact Us</a></li>
	       <li><a href="aboutus.php">About us</a></li>
	       <li><a href="facilities.php">Facilities</a></li>
		   <li><a href="login.php">Login</a></li>
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
     	<center>
		 <div style="background-image: url('https://wallpaperaccess.com/full/1567833.jpg'); width:1519;">
		 <font face = "Times New Roman" size = "25"><b>BODY POWER FITNESS CLUB</b></font><br><br>
     	<font face = "Times New Roman" size = "5">
		 Full Name&emsp;<input type="text" name="nm" style="width:600px;" required><br><br>
     	Address&emsp;<input type="text" name="addr" style="width:600px;" required>&emsp;&emsp;<br><br>
		Email&emsp;<input type="email" name="email" style="width:600px;" required>&emsp;&emsp;<br><br>
		Phone No.&emsp;<input type="numeric" name="pno" style="width:600px;" required>&emsp;&emsp;<br><br>
     	Age&emsp;<input type="text" name="age"required><br><br>
     	Occupation&emsp;<input type="text" name="occ"required>&emsp;&emsp;<br><br>
     	Joining Date&emsp;<input type="date" name="jd"required><br><br>
     	Plan of Membership&emsp;<input type="radio" name="pom" value="Yearly" required>Yearly &emsp;
			<input type="radio" name="pom" value="Half Yearly" required>Half Yearly &emsp;
			<input type="radio" name="pom" value="Quaterly" required>Quaterly &emsp;
			<input type="radio" name="pom" value="Monthly" required>Monthly<br><br>
     	<input type="submit" class="button" name="submit" value="Submit">
		</font>
     	</center>
     	</div>
     </form>
    </body>

<?php
error_reporting(0);
   if($_POST['submit'])
	{
		$nm=$_POST["nm"];
		$email=$_POST["email"];
		$pno=$_POST["pno"];
		$addr=$_POST["addr"];
		$age=$_POST["age"];
		$occ=$_POST["occ"];
		$jd=$_POST["jd"];
		$pom=$_POST["pom"];

	   if($nm!="" && $email!="" && $pno!="" && $addr!="" && $age!="" && $occ!="" && $jd!="" && $pom!="")
		 {
			$query = "INSERT INTO 'project'.'gym' ('nm', 'email', 'pno', 'addr', 'age', 'occ', 'jd', 'pom') VALUES ('$nm','$email','$pno','$addr','$age','$occ','$jd','$pom')";
			$data = mysqli_query($conn, $query);

		 if($data)
			 {
				 
			   echo "Hello Mr./Ms. ".$nm." Visit Our Gym For Your Registration Details <br>";
			   echo"Thank You.....!!!!!";
			 }
		else
			{
			   echo "Data not inserted";
			}


		  }

	 }
<-Hello Everyone->
?>
<body>
<nav class="navbar navbar-inverse navbar-sticky-bottom">
	   <div class="container-fluid">
	     <div class="navbar-header">
		 <a class="navbar-brand" href="#"><font face = "Times New Roman" size = "5">All Right Reserved to Body Power Fitness Club</font></a>
		</div>
</nav>		 
</body>

 </html>