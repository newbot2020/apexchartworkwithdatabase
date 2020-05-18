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
<div class="jumbotron">
<h2 class="col-md-6">List of all Areas</h2>


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
            postid: 51      
        },
        function(data){
            //for(var i=0;i<data.length;i++){
              //  data[i].split(",");

            //}
            //var data = data[1].substr(10, 40);
            //var data = data[2];
            //$('#id').html(data[2]);

            //$('#name').html(data[0]);

            //$('#roll').html(data[1]);
            var len=data.length;
            var data=data.slice(2,len-1);
            data='"'+data;
            data = data.split(",");
            var main=[];
            for (var i=0;i<data.length-1;i++)

            {   if(parseFloat(data[i])!=NaN){
                    main.push(parseFloat(data[i]));
                }
                
            }
            console.log(data);
            $('#all').html(data);
            $('#id').html(len);
            $('#roll').html(typeof(data));
            $('#name').html(main);
            console.log(main);
            console.log(main[0]);
            

            
        }

        );

    });

});
</script>
</body>
</html>

