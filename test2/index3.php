<?php 
include 'calldata.php';
?>
<html>
<head>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 
<style>
    .col-4{
    display:flex;
    float:left;
    }
</style>
</head>
<body>
<h2 align="center">List of all Areas</h2>
<div id="phpdata"></div>

<div class="form-group" style="margin-left:10%;">
  <label for="sel1">Select Area from the list:</label>
  
  <select multiple class="col-sm-6 form-control"  id="datalist">
    <option class="" id="">Select Area</option>
    <?php
    while($row=mysqli_fetch_row($result)){
    echo'<option class="" id="'.$row[0].'">'.$row[1].'</option>';
    }
    ?>
    
  </select>
</div>



<script type="text/javascript">

 $(document).ready(function() {
     

    $("#display").click(function() {                

    
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "display5.php",             
            dataType: "json",   //expect html to be returned                
            success: function(data){ 
                //var data = $.parseJSON(data);
                console.log("code execution started")
                console.log(data);
                console.log(typeof(data));
                //console.log("The id is"+data[0]['id']);
                //console.log(data[place]);
                //console.log(data[0]['data']);
                //for(var i=0; i<len; i++){
                    //var id = data[i].['id'];
                    //$("#selector").text(id); 
                //}
                        
            }


            }

        );

    });   


});
</script>

</body>
</html>

