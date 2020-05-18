function Getcheckbox() {
  $.get("getarea.php", function (data) {
    var data = data.slice(2, data.length - 1);
    data = data.split(",");
    var placearry = [];
    var count = 0;
    data.forEach((x) => {
      //x.slice(2, x.length -1);
      //x.slice(0, x.length-1);
      x.replace(/"/g, " ");
      x = x.replace(/^"(.*)"$/, "$1");
      placearry.push(x);
    });

    // after the above code we received the name of the places in an object from the database.

    console.log(placearry);
    console.log("total element in list" + placearry.length);
    console.log(placearry[0].lastIndexOf('"') - 1);
    var arrylen = placearry.length;
    console.log("arraylength  " + arrylen + typeof arrylen);
    var countrow = Math.ceil(arrylen / 3);
    console.log("count row  " + countrow);
    var count = 0;

    //first while loop for column1
    while (count < countrow) {
      var text =
        '<div class="form-check">' +
        '<label class="form-check-label"><br>' +
        '<input type="radio" class="checkselect" value="' +
        count +
        '" id="' +
        count +
        '">' +
        placearry[count] +
        "</label></div>";
      document.getElementById("column1").innerHTML += text;
      count += 1;
    }
    var remainarry = arrylen - count;
    console.log("count 1  " + count);
    console.log("remainarray 1  " + remainarry);

    //second while loop
    while (count >= countrow && count < remainarry) {
      var text =
        '<div class="form-check">' +
        '<label class="form-check-label"><br>' +
        '<input type="radio" class="checkselect" value="' +
        count +
        '" id="' +
        count +
        '">' +
        placearry[count] +
        "</label></div>";
      document.getElementById("column2").innerHTML += text;
      count += 1;
    }
    remainarry = remainarry - countrow;
    var countstore = count;

    console.log("count 2  " + count);
    console.log("remain array 2   " + remainarry);

    //third while loop
    while (count >= countstore && count < arrylen) {
      var text =
        '<div class="form-check">' +
        '<label class="form-check-label"><br>' +
        '<input type="radio" class="checkselect" value="' +
        count +
        '" id="' +
        count +
        '">' +
        placearry[count] +
        "</label></div>";
      document.getElementById("column3").innerHTML += text;
      count += 1;
    }
    remainarry = remainarry - countrow;
    var countstore = count;

    console.log("count 3  " + count);
    console.log("remain array 3   " + remainarry);
  });
}

$.get("getarea.php", function (data) {
  var data = data.slice(2, data.length - 1);
  data = data.split(",");
  var placearry = [];
  var count = 0;
  data.forEach((x) => {
    //x.slice(2, x.length -1);
    //x.slice(0, x.length-1);
    x.replace(/"/g, " ");
    x = x.replace(/^"(.*)"$/, "$1");
    placearry.push(x);
  });

  // after the above code we received the name of the places in an object from the database.

  console.log(placearry);
  console.log("total element in list" + placearry.length);
  console.log(placearry[0].lastIndexOf('"') - 1);
  var arrylen = placearry.length;
  console.log("arraylength  " + arrylen + typeof arrylen);
  var countrow = Math.ceil(arrylen / 3);
  console.log("count row  " + countrow);
  var count = 0;

  //first while loop for column1
  while (count < countrow) {
    var text =
      '<div class="form-check">' +
      '<label class="form-check-label"><br>' +
      '<input type="radio" class="checkselect" value="' +
      count +
      1 +
      '" id="' +
      count +
      1 +
      '">' +
      placearry[count] +
      "</label></div>";
    document.getElementById("column1").innerHTML += text;
    count += 1;
  }
  var remainarry = arrylen - count;
  console.log("count 1  " + count);
  console.log("remainarray 1  " + remainarry);

  //first while loop
  while (count >= countrow && count < remainarry) {
    var text =
      '<div class="form-check">' +
      '<label class="form-check-label"><br>' +
      '<input type="radio" class="checkselect" value="' +
      count +
      1 +
      '" id="' +
      count +
      1 +
      '">' +
      placearry[count] +
      "</label></div>";
    document.getElementById("column2").innerHTML += text;
    count += 1;
  }
  remainarry = remainarry - countrow;
  var countstore = count;

  console.log("count 2  " + count);
  console.log("remain array 2   " + remainarry);

  //second while loop
  while (count >= countstore && count < arrylen) {
    var text =
      '<div class="form-check">' +
      '<label class="form-check-label"><br>' +
      '<input type="radio" class="checkselect" value="' +
      count +
      1 +
      '" id="' +
      count +
      1 +
      '">' +
      placearry[count] +
      "</label></div>";
    document.getElementById("column3").innerHTML += text;
    count += 1;
  }
  remainarry = remainarry - countrow;
  var countstore = count;

  console.log("count 3  " + count);
  console.log("remain array 3   " + remainarry);
});
