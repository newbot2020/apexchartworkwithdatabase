<?php
$con=mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"badc");
    
    
    $result=mysqli_query($con,"SELECT * FROM waterlevelencode ");
    //$result=mysqli_query($con,"SELECT * FROM waterlevelencode WHERE id=1");
    $data=[];
  
 
    while ($row=mysqli_fetch_row($result)){
        $data=$row[2];
              
        //echo $row[2];
        $decoded = base64_decode($data);
        $data["levelofwater"]=$decoded;
        $data["id"]=$row[0];
        $data["place"]=$row[1];
        
        
    }
    
    
    
   // echo $decoded;
    //echo gettype( $decoded);
    //echo gettype( $data);
    //echo gettype( $id);

    echo (string)json_encode(
        
        $data
    );
   


?>