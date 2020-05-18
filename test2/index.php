<?php 
$con=mysqli_connect("localhost","root","");
?>
<html>
<head>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <script type="text/javascript">

 $(document).ready(function() {

    $("#display").click(function() {                

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "display3.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){ 
            
            $("#responsecontainer").html(response); 
                      
        }


      });

    });

})

   




</script>
<style>
    .col-4{
    display:flex;
    float:left;
    }
</style>
</head>
<body>
<h2 align="center">List of all Areas</h2>
<table border="1" align="center">
   <tr>
       <td> <input type="button" id="display" value="Display All Data" /> </td>
   </tr>
</table>
<br>
<div id="responsecontainer" align="center">

</div>

</body>
</html>