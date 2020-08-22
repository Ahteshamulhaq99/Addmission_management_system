<?php
session_start();
if(!isset($_SESSION['name'])){
	header('location:login.php');
  }else{
$conn = mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'students');
$view_rec= $_GET['view'];
$query= "select * from std_reg where s_id='$view_rec'";
$run=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($run))
{
	$view_id=$row['s_id'];
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
  <style>
  
  label,h2{
	  margin-left:50px;
	  }
label{
	width:150px
}
.item label{
	font-weight: bolder;
}
.a{
	display:inline;
	margin-left:50px;
}
  .item{
	  display:inline-block;
	  width:400px;
  }
  .id{
	font-size: 30px;
	width:300px;
	
	  color:white;
	  background-color:black;
  }
  .address{
	  display:inline;
  }
  
  </style>
    <title>Student Detail</title>
</head>
<body style="text-align:justify">
<h1 style="text-align:center">Detail Of Student</h1><hr>
<div class="id" ><div class="a">ID:</div> <?php echo $view_id; ?></div>
<div>
<div class="item"><label for="name">Name: </label><u><?php echo $s_name; ?></u></div>
<div class="item"><label for="name">Father Name: </label><u><?php echo $s_father; ?></u></div>
</div>
<div>
<div class="item"><label for="name">Field: </label><u><?php echo $s_field; ?></u></div>
<div class="item"><label for="name">Mobile No: </label><u><?php echo $s_mobile; ?></u></div>
</div>
<div>
<div class="item"><label for="name">Email: </label><u><?php echo $s_email; ?></u></div>
<div class="item item1"><label for="name">Address: </label><div class='address'><u><?php echo $s_address; ?></u></div></div>
</div>
<div>
<div class="item"><label for="name">Gender: </label><u><?php echo $s_gender; ?></u></div>
</div>
<h2>Previuos Record</h2>
<table border=2px  class="container-fluid container-sm container-md container-xl container-lg" style="text-align:center">
<tr>
<th>Standard </th>
<th>Roll No </th>
<th>Board </th>
<th>Percent </th>
<th>Year </th>
</tr>
<tr>
<td><?php echo $s_standard; ?>
</td>
<td><?php echo $s_roll; ?>
</td>
<td><?php echo $board; ?>
</td>
<td><?php echo $percent."%"; ?>
</td>
<td><?php echo $pass_year; ?>
</td>
</tr>
</table>   
</body>
</html>
<?php } ?>