<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <style>
      .loader-wrapper {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #242f3f;
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
    <title>Testform</title>
  </head>
  <body>
    

    <div class="row"></div>

    <div class="jumbotron row" id="formcheckbox">
      <div class="col-4" style="background-color:#a859f7;" id="column1"></div>
      <div class="col-4" style="background-color:#59f7a0;" id="column2"></div>
      <div class="col-4" style="background-color:#f75959;" id="column3"></div>
    </div>

    <script type="text/javascript">
      $(document).ready(function () {
        $.get("getarea.php", function (data) {
          var data = data.slice(2, data.length - 1);
          data = data.split(",");
          var placearry = [];
          var count=0;
          data.forEach((x) => {
            //x.slice(2, x.length -1);
            //x.slice(0, x.length-1);
            x.replace(/"/g, " ");
            x= x.replace(/^"(.*)"$/, '$1');
            placearry.push(x);
          });
          
          
          // after the above code we received the name of the places in an object from the database.

          
          console.log(placearry);
          console.log("total element in list"+placearry.length);
          console.log(placearry[0].lastIndexOf('"')-1);
          var arrylen=placearry.length;
          console.log("arraylength  "+arrylen+typeof(arrylen));
          var countrow = Math.ceil(arrylen/ 3);
          console.log("count row  "+countrow);
          var count = 0;
          


          //first while loop for column1
          while (count < countrow) {
            var text =
              '<div class="form-check">' +
              '<label class="form-check-label"><br>' +
              '<input type="radio" class="checkselect" value="' +
              placearry[count] +'" id="' +
              count +'">' +placearry[count] +'</label></div>';
            document.getElementById("column1").innerHTML += text;
            count +=1;
          }
          var remainarry= arrylen-count;
          console.log("count 1  "+count);
          console.log("remainarray 1  "+remainarry);
          
          //first while loop
            while (count >= countrow && count < remainarry) {
            var text =
              '<div class="form-check">' +
              '<label class="form-check-label"><br>' +
              '<input type="radio" class="checkselect" value="' +
              placearry[count] +
              '" id="' +
              count +
              '">' +
              placearry[count] +
              "</label></div>";
            document.getElementById("column2").innerHTML += text;
            count += 1;
          }
          remainarry=remainarry-countrow;
          var countstore=count;
         
          console.log("count 2  "+count);
          console.log("remain array 2   "+remainarry);

          //second while loop
          while (count >= countstore && count < arrylen) {
            var text =
              '<div class="form-check">' +
              '<label class="form-check-label"><br>' +
              '<input type="radio" class="checkselect" value="' +
              placearry[count] +
              '" id="' +
              count +
              '">' +
              placearry[count] +
              "</label></div>";
            document.getElementById("column3").innerHTML += text;
            count += 1;
          }
          remainarry=remainarry-countrow;
          var countstore=count;
         
          console.log("count 3  "+count);
          console.log("remain array 3   "+remainarry);
          
          
                    
          
        });
      });
    </script>
  </body>
</html>
