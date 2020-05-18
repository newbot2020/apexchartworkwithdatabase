<?php 
    $con=mysqli_connect("localhost","root",""); 
    mysqli_select_db($con,"badc");
    $result=mysqli_query($con,"select * from waterlevel");
    
    

  echo'<div class="form-check">
  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 1</label>
  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 2</label>
  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 3</label>

  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 4</label>
  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 5</label>
  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 6</label>

  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 7</label>
  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 8</label>
  <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
  <label class="form-check-label" for="materialChecked2">Material 9</label>
</div>';

/*
  <form action="/action_page.php">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> I have a boat</label><br><br>
  <input type="submit" value="Submit">
</form>

    echo"<ul>";
    while($data = mysqli_fetch_row($result))
    {   

        echo "<tr>";
        echo "<td align=center>$data[1]</td>";
        echo "<td align=center>$data[2]</td>";
        echo "</tr>";
    }
    echo"</ul>";

 */   
?>
