<?php 

$con=mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"badc");
$result=mysqli_query($con,"select * from waterlevel");
    
?>