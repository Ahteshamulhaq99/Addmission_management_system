<?php 

$conn = mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'students');
$delete_rec= $_GET['del'];
$query="delete from std_reg where s_id='$delete_rec'";
$run=mysqli_query($conn,$query);
if($run){
    echo "<script> window.open('record.php?deleted=success','_self')</script>";
}
?>