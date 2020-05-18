<?php 
    $con=mysqli_connect("localhost","root",""); 
    mysqli_select_db($con,"badc");
    $result=mysqli_query($con,"select * from waterlevel");
    
                
        while($datarow=mysqli_fetch_row($result)){
            $data['id']=$datarow[0];
            $data['place']=$datarow[1];
            $data['data']=$datarow[2];       
            
        }
        
        //echo $return_arr;
        echo json_encode($data);

?>


