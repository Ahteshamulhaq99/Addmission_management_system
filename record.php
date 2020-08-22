<?php
session_start();
if(!isset($_SESSION['name'])){
  header('location:login.php');
}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="record.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
  <title>record of student</title>
</head>
<body>

	 <table border=2px class="container-fluid container-sm container-md container-xl container-lg">

<tr  ><th colspan=7 ><h1 style=" background-color: white;">Record Of Students <a type="button" class="btn btn-danger btn-lg" href='logout.php' style=" float:right">Logout</a></h1></th>
</tr>


<tr>

<th>ID</th>
<th>Name</th>
<th>Father Name</th>
<th>Field</th>
<th>Delete</th>
<th>Edit</th>
<th>View</th>
</tr>

<tr>

    <?php
$conn = mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'students');
$que="select * from std_reg";
$run=mysqli_query($conn,$que);

while($row=mysqli_fetch_array($run)){
    $id= $row['s_id'];
    $name=$row['s_name'];
    $fname=$row['s_father'];
    $field=$row['field'];
    ?>
    <td> <?php echo $id ?></td>
    <td> <?php echo $name?></td>
    <td><?php echo $fname ?></td>
    <td><?php echo $field ?></td>
    <td><a href='delete.php?del=<?php echo $id;?>'><img class="icon" src="images/delete.png" alt=""></a></td>
    <td><a href='edit.php?edit=<?php echo $id;?>'><img class="icon" src="images/edit.png" alt=""></a></td>
    <td><a href='view.php?view=<?php echo $id;?>'><img class="icon" src="images/view.png" alt=""></a></td>
</tr>

<?php }} ?>

</table> 
</body>
</html>