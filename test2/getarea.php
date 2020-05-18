<?php
$con=mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"badc");
$result=mysqli_query($con,"select * from waterlevelencode");


while($row=mysqli_fetch_row($result)){
    $place[]=$row[1];
            
        
}
    
echo json_encode($place);          
      
    
?>