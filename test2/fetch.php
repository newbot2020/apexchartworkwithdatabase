<?php
$con=mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"badc");
echo 'Its doing great'.$_POST["id"];

if (isset($_POST['id'])){
    //$id = isset($_POST['id']) ? $_POST['id'] : '';
    echo gettype($_POST['id']);
    $result=mysqli_query($con,'SELECT * FROM waterlevel WHERE id='.$_POST['id']);
    
  
 
    while ($row=mysqli_fetch_row($result)){
        $Array[]=$row[2];
        
    }
    echo json_encode( $Array);
    echo gettype( $Array);
}

?>