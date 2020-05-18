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

    /*
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "display4.php",             
            dataType: "json",   //expect html to be returned                
            success: function(response){ 
                var len = response.length();
                for(var i=0; i<len; i++){
                    var id = response[i].id;
                    console.log(id);
                    var place = response[i].place;
                    console.log(place);
                    var data = response[i].data;
                    var htmlcontent='<div class="form-check">'+
                    '<input class="form-check-input" type="checkbox" value="" id="'+id+'">'+
                    '<label class="form-check-label" for="defaultCheck1">'+place+ '</label>'+'</div>' ;
                        $("#selector").text(id,place); 
                        
                }


            }

        });

    */

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
<div class="col-sm-4 mr-auto" id="target"></div>
<div class="jumbotron" id="responsecontainer">
    <h2>The area is</h2>
    <p id="selector"></p>
</div>


<div id="phpdata"></div>
</body>
</html>

