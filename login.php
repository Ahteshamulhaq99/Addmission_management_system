<?php
session_start();
$conn = mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'students');


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login As Admin</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
  
    
</head>
<body class="form-v9">

	<div class="page-content">
	 <div class="form-v9-content" style="background-color: white;" >
		
		
			<form class="form-detail" action="" method="POST">
				<h1 style="color: navy; text-align: center;">Login As Admin</h1>
				<br><br>
				<div class="form-row-total">
					<div class="form">
						<input type="text" name="name" id="full-name" class="input-text" placeholder="Your Name" required>
					</div>
					<div class="form-r">
						<input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
					</div>			
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="Login">
				</div>
                <?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $query="select * from admin where name ='$name' and password='$pass'";
    $run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)>0){
        $_SESSION['name']=$name;
        echo"<script>window.open('record.php','_self')</script>";
    }else{
        echo"<script>alert('Invalid Name Or Password')</script>";
    }
}
?>
				
			</form>
		</div>
	</div>
</body>
</html>


