<?php
$con=mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"badc");
//echo 'Its doing great'.$_POST["id"];

//if (isset($_POST['postid'])){
    //$id = isset($_POST['id']) ? $_POST['id'] : '';
    
    
    $result=mysqli_query($con,"SELECT * FROM waterlevelencode");
    //$result=mysqli_query($con,"SELECT * FROM waterlevelencode WHERE id=1");
    
$id=[];
$dataelement=[];
$placelement=[];
$count=0;  
 
    while ($row=mysqli_fetch_row($result)){
        
              
        //echo $row[2];
        $decoded = base64_decode($row[2]);
        
        $tempid=$row[0];
        
        $tempplace=$row[1];
        
        $id[$count]=$row[0];
        //$place.push($row[1]);
        //$dataelement.push(["id"=>row[0],"data"=>$decoded]);
        //$dataelement.push($decoded);
        $dataelement[$count]=$decoded;
        //$placelement.push(["id"=>row[0],"place"=>row[1]]);
        $placelement[$count]=$row[1];
        //$dataelement = array_merge($dataelement, $dataelements);
        //$placelement = array_merge($placelement, $placelements);
        
        //foreach($Array as $element){
        //    $datas[]=$element;
        //}
        $count=$count+1;
    }
    
    
    
   // echo $decoded;
    //echo gettype( $decoded);
    //echo gettype( $data);
    //echo gettype( $id);

    echo (string)json_encode([
        
        "id"=>$id,
        "place"=>$placelement,
        "data"=>$dataelement
    ]);
   


?>