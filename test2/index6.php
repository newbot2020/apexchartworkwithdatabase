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
    #messenger{
     background-color: #9e0202;
     color:white;   
        
    }
</style>
</head>
<body>
<div class="jumbotron">
<div id="message"></div>
<h2 class="col-md-6">List of all Areas</h2>


<div class="col-sm-4 row">
<?php
$count=0;
    while($row=mysqli_fetch_row($result)){
        $count++;
        echo '<div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="checkselect" value="'.$row[0].'" id="'.$row[0].'">'.$row[1].'
        </label>
        </div>';
    }
echo'<div id="totalarea">Total area'.$count.'</div>';
?>
</div>

  
<button class="btn btn-primary" style="margin-top:10%;" id="search">Get Data</button>
<h2 id="id"></h2>
<h2 id="name"></h2>
<h2 id="roll"></h2>
<h2 id="all"></h2>

</div>


</div>

<script type="text/javascript">

 $(document).ready(function() {
     
   

        $("#search").click(function() { 
                    
            
            var id=parseInt($('.checkselect:checked').val()); 
            console.log(id,typeof(id));
            console.log("second stage started");
        $.post("fetch3.php",
        {
            postid: id    
        },
        function(data){
            
            var len=data.length;
            var data=data.slice(2,len-1);
            data='"'+data;
            data = data.split(",");
            var main=[];
            for (var i=0;i<data.length-1;i++)

            {   if(!Number.isNaN(parseFloat(data[i]))){
                    main.push(parseFloat(data[i]));
                }
                
            }
            if (jQuery.isEmptyObject(main)){
                $('#message').html('<div class="alert alert-danger col-sm-3 " id="messenger" role="alert">Data is not available try again</div>');
                                
            }
            console.log(data);
            console.log(main);
            console.log(typeof(main));
            
            

            
        }

        );

    });

});
</script>
</body>
</html>

