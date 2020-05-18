<?php
$con=mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"badc");
//echo 'Its doing great'.$_POST["id"];

if (isset($_POST['id'])){
    //$id = isset($_POST['id']) ? $_POST['id'] : '';
    
    $result=mysqli_query($con,'SELECT * FROM waterlevel WHERE id='.$_POST['id']);
    
  
 
    while ($row=mysqli_fetch_row($result)){
        $Array[]=$row[2];
        foreach($Array as $element){
            $datas[]=$element;
        }
    }
    /*
    echo "<p>";

    foreach($Array as $element){
        print_r($element);
    }
    echo "</p>";
    */
    echo gettype( $datas);
    echo json_encode($datas);
   
}

?>