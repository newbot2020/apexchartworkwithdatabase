<?php
$con=mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"badc");
//echo 'Its doing great'.$_POST["id"];

//if (isset($_POST['postid'])){
    //$id = isset($_POST['id']) ? $_POST['id'] : '';
    
    
    $result=mysqli_query($con,"SELECT * FROM waterlevelencode WHERE id='".$_POST['postid']."'");
    //$result=mysqli_query($con,"SELECT * FROM waterlevelencode WHERE id=1");
    
  
 
    while ($row=mysqli_fetch_row($result)){
        $data=$row[2];
       
        $id=$row[0];
        //echo $row[2];
        $decoded = base64_decode($data);
        
        //foreach($Array as $element){
        //    $datas[]=$element;
        //}
    }
    
    
    
   // echo $decoded;
    //echo gettype( $decoded);
    //echo gettype( $data);
    //echo gettype( $id);

    echo json_encode(array(
        $decoded
    ));
   


?>