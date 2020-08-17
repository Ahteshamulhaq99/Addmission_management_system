<?php

$conn = mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'students');
$edit_rec= $_GET['edit']; 
$query="select * from std_reg where s_id='$edit_rec'";
$run=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($run))
{
	$edit_id=$row['s_id'];
	$s_name=$row[1];
	$s_father=$row[2];
	$s_field=$row[3];
	$s_mobile=$row[4];
	$s_email=$row[5];
	$s_address=$row[6];
	$s_gender=$row[7];
	$s_standard=$row[8];
	$s_roll=$row[9];
	$board=$row[10];
	$percent=$row[11];
	$pass_year=$row[12];


}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>update form</title>
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
		
		
			<form class="form-detail" action="edit.php?edit_form=<?php echo $edit_id; ?>" method="post">
				<h1 style="color: navy; text-align: center;">Registeration Form</h1>
				<br><br>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required value='<?php echo $s_name?>'>
					</div>
					<div class="form-row">
						<!-- <input type="" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Comfirm Password" required> -->
						<input type="text" name="father" id="father" class="input-text" placeholder="Father Name" required value='<?php echo $s_father ?>' >
					</div>
					
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="number" name="number" id="number" class="input-text" placeholder="Mobile No" required value='<?php echo $s_mobile  ?>'>
					</div>
					<div class="form-row">
						<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value='<?php echo $s_email ?>'>
					</div>
				</div>
				
				<div class="form-row-total">
					<div class="form-row">
						<input type=text name="address" placeholder="Address" class="input-text" required value='<?php echo $s_address ?>'></textarea>
						<!-- <input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required> -->
					</div>
					
					
					
					<div class="sel">
					<select class="field"  name="field" id="field" required value='<?php echo $s_field  ?>'>
  					<option value="computer science">Computer Science</option>
  					<option value="enviromental science">Enviromental Science</option>
 					 <option value="bba">BBA</option>
					  <option value="software engineer">Software Engineering</option>
						</select>
						</div>
						</div> 
				
				<h3 style="color: navy; font-size: 25px;">Gender</h3>
				<div class="form-row-total" style="color: navy;">
				<label for="">Male</label>	<div class="form-row" style="color: navy ; ">
						<input type="radio" name="gender" id="male" class="gender"required value='<?php echo $s_gender  ?>'>
						
					</div>
					<label for="">Female</label><div class="form-row" style="color: navy;">
					<input type="radio" name="gender" id="female" class="gender"  required value='<?php echo $s_gender ?>'>
					</div>
				</div>
				
				<h3 style="color: navy; font-size: 25px;">Previuos Record</h3>
				<table name="table">
				
					
					<tbody style="line-break: normal;"><tr>
						
						<td><input class="inupt-text" name="standard" type="text" required="" placeholder="Standard" value='<?php echo $s_standard  ?>'></td>
						<td> <input class="inupt-text" name="roll" type="text" required="" placeholder="Roll No" value='<?php echo $s_roll ?>'> </td>
						<td> <input class="inupt-text" name="board" type="text" required="" placeholder="Board" value='<?php echo $board ?>'> </td>
						<td> <input class="inupt-text" name="percentage" type="percentage" required="" placeholder="Percentage" value='<?php echo $percent ?>'> </td>
						<td> <input class="inupt-text" name="year" type="year" required="" placeholder=" Year" value='<?php echo $pass_year ?>'></td>
					</tr>
					
					
				</tbody></table>
				<div class="form-row-last">
					<input type="submit" name="update" class="register" value="update">
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST['update']))
{
$edit_rec1=$_GET['edit_form'];
 $name=$_POST['full-name'];
 $fname=$_POST['father'];
 $mobile=$_POST['number'];
 $field=$_POST['field'];
$email=$_POST['your-email'];
$address=$_POST['address'];
// $field=$_POST['field'];
$gender=$_POST['gender'];
$standard=$_POST['standard'];
$roll=$_POST['roll'];
$board=$_POST['board'];
$percent=$_POST['percentage'];
$year=$_POST['year'];

$que=mysqli_query($conn,"update std_reg set
s_name='$name',s_father='$fname',s_mobile='$mobile',field='$field',s_email='$email',
s_address='$address',s_gender='$gender',standard='$standard',s_roll='$roll',
board='$board',s_percent='$percent',pass_year='$year' where s_id='$edit_rec1'");

if($que){
	echo "<script> window.open('record.php?updated=success','_self')</script>";
}}






?>