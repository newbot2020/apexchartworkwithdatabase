<?php 
    $con=mysqli_connect("localhost","root",""); 
    mysqli_select_db($con,"badc");
    $result=mysqli_query($con,"select * from waterlevel");
    
        echo'
        <div class="col-4">
        <section class="section-preview">
        <!-- Default unchecked -->';
        
        while($data=mysqli_fetch_row($result)){
           
            echo'<div class="form-check">
            <input
                type="checkbox"
                class="form-check-input"
                id="'.$data[0].'"/>
            <label class="form-check-label" for="'.$data[0].'">'.$data[1].'</label
            >
            <hr />
            </div>';

        }
                
        echo '</section>
        </div>';
                
        
?>
