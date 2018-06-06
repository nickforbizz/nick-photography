<!DOCTYPE html>
<html>
<head>
  <title>Success Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/webCss.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
  <style></style>
  <script></script>
</head>
<body onload="move()">

  <h1>You've successfully updated your page</h1>

  <div class="w3-progress-container">
  <div id="myBar" class="w3-progressbar w3-green" style="width:1%"><p class="w3-text-red">Ridirecting to prev Page.</p></div>
</div>

<span class="w3-btn" ></span>

<script>
function move() {
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
        }
    }
}
</script>
  <?php header('refresh:2;
                video_tut.php'
              );
  ?>

</body>
</html>
