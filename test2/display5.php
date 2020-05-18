<?php 
    $con=mysqli_connect("localhost","root",""); 
    mysqli_select_db($con,"badc");
    $result=mysqli_query($con,"select * from waterlevel");
    
                
        while($datarow=mysqli_fetch_row($result)){
            $id[]=$datarow[0];
            $place[]=$datarow[1];
            $data[]=$datarow[2];       
            
        }
        $data['id']=$id;
        $data['place']=$place;
        $data['data']=$data;

        //echo $return_arr;
        echo json_encode($data);

?>


