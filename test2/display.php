<?php 
    $con=mysqli_connect("localhost","root",""); 
    mysqli_select_db($con,"badc");
    $result=mysqli_query($con,"select * from waterlevel");
    
    echo "<table border='1' >
    <tr>
    <td align=center> <b>Nameof place</b></td>
    <td align=center><b>Waterlevel</b></td>";

    echo"<ul>";
    while($data = mysqli_fetch_row($result))
    {   

        
        





        echo "<tr>";
        echo "<td align=center>$data[1]</td>";
        echo "<td align=center>$data[2]</td>";
        echo "</tr>";
    }
    echo"</ul>";
?>