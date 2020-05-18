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


<div class="col-sm-2 row">
<?php
    while($row=mysqli_fetch_row($result)){
        echo '<div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="checkselect" value="'.$row[0].'" id="'.$row[0].'">'.$row[1].'
        </label>
        </div>';
    }
?>
</div>
 
  
<button class="btn btn-primary" style="margin-top:10%;" id="search">Get area data</button>
</div>
<div id="phpdata"></div>
<div id="phpdata1"></div>



<script type="text/javascript">

 $(document).ready(function() {
     
   

    $("#search").click(function() { 
                
        var id=$('.checkselect:checked').val();
            
        console.log(id);
        if(id!='')
        {
            console.log("second stage started");
            $.ajax({    //create an ajax request to display.php
                    method:"POST",
                    data:{id:id},
                    url: "fetch.php",             
                    dataType: "html",  //expect html to be returned                
                    success: function(dat){
                        
                        console.log(dat.id);
                        dat.forEach(function(item){ 
                        console.log(item); 
                        });

                        $('#phpdata1').text(data.id);
                        $('#phpdata').html(data.data);
                    },
                    error: function(err){
                    console.log(err);
                    }
            }
            );
        }
        else{
            alert("Please select an area.");
        }

    });

});
</script>

</body>
</html>

