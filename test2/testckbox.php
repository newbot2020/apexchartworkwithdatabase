<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Testform</title>
</head>
<body>
<div class="row">

</div>
<script type="text/javascript">

$(document).ready(function() {
                          
                    
    $.get("getarea.php", function(data){
    var data=data.slice(2,data.length-1);
    data = data.split(",");
    var placearry=[];
    data.forEach(x => {
    x.slice(x.indexOf('"'),x.lastIndexOf('"'));
    placearry.push(x);
    });
        
    
    
    //console.log(typeof(data));
    console.log(placearry);
    var z=data[2].indexOf('"');
    var w=data[2].lastIndexOf('"');
    console.log(data[5]);
    console.log(z,w);
    var data=data
    
    
    });
});

</script>
</body>
</html>