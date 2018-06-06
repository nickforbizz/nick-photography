
<!DOCTYPE html>
<html>
<head>
    <title>Images</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/webCss.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <style>
      #imgFlt{

        float: left!important;
      }
    </style>
</head>
<body>
  <header>
    <div class="w3-top topNav">
      <div class="w3-bar w3-sand">
      <a href="index.php" class="w3-bar-item w3-button w3-light-blue">Home</a>
      <a href="images.php" class="w3-bar-item w3-button w3-hide-small">Images</a>
      <a href="video_tut.php" class="w3-bar-item w3-button w3-hide-small">Videos/tutorials)</a>
      <a href="others.php" class="w3-bar-item w3-button w3-hide-small">Junk-Sites</a>
      <div class="w3-dropdown-hover w3-right w3-hide-small">
          <button class="w3-button" >
            Account <a class="fa fa-caret-down"></a>
          </button>
          <div id="demo" class="w3-dropdown-content w3-bar-block w3-card-2" style="right:10px">
            <a href="#" class="w3-bar-item w3-button w3-sand" style=""  id="loginbtn" onclick="check()">Log In</a>
            <a href="#" class="w3-bar-item w3-button w3-sand" style="display:none;" id="logoutbtn" onclick="logout()">Log out</a>

          </div>
      </div>
      <a href="#" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="navSmallScreens()">&#9776;</a>
      </div>
    </div>

    <!-- nav on small screens -->
    <div id="smallScreenNav" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium topNav">
      <div class="w3-bar w3-sand">
      <a href="index.php" class="w3-bar-item w3-button w3-light-blue">Home</a>
      <a href="images.php" class="w3-bar-item w3-button ">Images</a>
      <a href="video_tut.php" class="w3-bar-item w3-button ">Videos/tutorials)</a>
      <a href="others.php" class="w3-bar-item w3-button ">Junk-Sites</a>
      <div class="w3-dropdown-hover w3-right ">
          <button class="w3-button" >
            Account) <a class="fa fa-caret-down"></a>
          </button>
          <div id="demo" class="w3-dropdown-content w3-bar-block w3-card-2" style="right:10px">
            <a href="#" class="w3-bar-item w3-button w3-sand" style=""  id="loginbtn" onclick="check()">Log In</a>
            <a href="#" class="w3-bar-item w3-button w3-sand" style="display:none;" id="logoutbtn" onclick="logout()">Log out</a>
          </div>
      </div>
      </div>
    </div>
    </header>
      <div class="w3-container w3-center w3-padding-32">
           <h1><b>Images</b></h1>
           <p>Amazing photoshop Images</p>
       </div>

  <!-- upload file btn -->
  <div class="w3-center upload_btn">
    <button onclick="check()" class="  w3-btn w3-hover-purple w3-round-xlarge" aria-hidden="true">Upload Files</button>
  </div>

  <div class="w3-responsive">
    <?php
    require 'conn.inc.php';
    include 'imageUpld.php';
    include 'grabFiles.php';

    //for updating the table in the HTML
    $query_uploads = "SELECT `link`,`name`  FROM `images`";
    $query_run_uploads = $connDb->query($query_uploads);
      if ($query_run_uploads->num_rows > 0) {
                        $size = count($resultOfFiles);
                        echo '<div class="w3-row">';
                        echo "<div class='w3-container w3-card-4 w3-center w3-teal' style='height:50px;padding-top:5px'> Available Images<br>click for full Image</div>";
                        echo '<div class="w3-col s12 m3 w3-center" style="height:20px;">';
                        echo "</div>";
                        echo "</div>";
                          echo '<div class="w3-row">';
                        for ($i = 0; $i < $size; $i++){
                          if ($row = $query_run_uploads->fetch_array()) {

                                echo '<div class="w3-col s12 m3 w3-row-padding w3-margin-top " style="" >';
                                      echo "<div id='imgFlt' >";
                                      echo "<div class='w3-card-4'>";
                                      echo "<img  src='./".$row['link']."' style='width:100%;max-width:300px;height:240px;' onclick='onClick(this)'> ";
                                      echo "<div class='w3-container'>";
                                      echo "<h5>".$row['name']."</h5>";
                                      echo "</div>";
                                      echo "</div>";
                                      echo "</div>";
                                echo "</div>";
                            //echo "".$resultOfFiles[$i]."</td>";


                          }else {
                            echo "lorem ispum";
                          }
                          }
                          echo "</div>";
                        //  echo "</div>";
      }else {
        echo '<div class="w3-col s12 m12 w3-center w3-sand" style="height:300px;">';
            echo "<p class='w3-text-light-green'>No Uploads Available</p>";
        echo "</div>";

    }
    ?>
    </div>

    <!-- Upload Image Modal -->
    <div id="fileModal" class="w3-modal">
      <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
          <span onclick="document.getElementById('fileModal').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
          <img src="images/fileImg.jpg" alt="upload Files" style="width:30%" class="w3-circle w3-margin-top">
        </div>

        <form enctype="multipart/form-data" method="POST" id="formImages1">
          <div class="w3-section">
            <label class="w3-center"><b>Please choose a file to upload</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="file"  name="uploaded">
            <div class="w3-center">
                <label><b>Image Details</b></label><br>
                  <input class=" w3-input" placeholder="Type Name" type="text" name="name" required><br>
                <label>
                  <input class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="upload" value="Upload" id="formImages">
                </label>
            </div>
        </form>

          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('fileModal').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
          </div>
        </div>
    </div>
  </div>

  <!-- login prompt  -->

  <div id="passmodal" class="w3-modal" style="display:none;">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px;padding:10px;">
        <div class="w3-container w3-blue w3-center"><h2>Credentials</h2></div>
      <div class="w3-center"><br>
       <span onclick="document.getElementById('passmodal').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      </div>
      <div style="text-align:center;">
          <input type="text" class="w3-input w3-border w3-light-grey" name="username" placeholder="Enter Username" id="username1" style="padding:5px;"><br>
        <input type="password" class="w3-input w3-border w3-light-grey" name="pass" placeholder="Enter Password" id="xpassword" style="padding:5px;">
        <br><br><br>
      <button type="button" name="button" class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge" onclick="submit()">submit</button>

      </div>

    </div>
  </div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-closebtn w3-hover-red w3-text-white w3-xxxlarge w3-container w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" style="max-width:100%">
    </div>
  </div>

  <!-- Footer -->
    <footer class="w3-container w3-teal w3-margin-0" >
        <div class="w3-container w3-teal w3-padding-32" >
          <p class="w3-center"> Thanks for visiting the site <br> <b>Total Visits  <?php include 'count_ip.php'; ?> </b></p>
          <p class="w3-center"> &copy- Get_It_From_Nick</p>
        </div>
    </footer>
      <script  src="jquery.min.js"></script>
      <script  src="jsfile.js"></script>
      <script type="text/javascript">
      document.getElementById('formImages1').reset();

function check() {
  if(localStorage.loggedin==undefined){
    $("#passmodal").css("display","block")
  }else {
    $("#fileModal").css("display","block")

  }
}

      function submit() {
        var pass=$("#xpassword").val()
        var username=$("#username1").val()
        $.ajax({
            url: "./verify.php",
            method:"post",
            data:"pass="+pass+"&username="+username,
            type:"text",
            success: function(data){

            console.log(data);

            if(data=="ACCESS_GRANTED"){

              localStorage.loggedin=data
              $("#passmodal").hide()
              $("#fileModal").css("display","block")
              ifloggedin()
            }else {
                alert("Wrong Username password combination!")
            }

            },error:function (err) {

              console.error(err);
            }
          })
}

function logout() {
  delete localStorage.loggedin
  ifloggedin()
}

function ifloggedin() {
  if(localStorage.loggedin!=undefined){
    $("#logoutbtn").show()
    $("#loginbtn").hide()
  }else {
    $("#logoutbtn").hide()
    $("#loginbtn").show()

  }
}
ifloggedin()
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
      </script>
</body>
</html>
