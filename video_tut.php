<DOCTYPE html>
<html lang="en us">
<head>
    <title> Video Tutorials </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/video_tut.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <style >
      a:link {
        text-decoration: none;
      }
    </style>
    <script>

    </script>

</head>
<body>
  <header>
    <!-- nav on large screens -->
    <div class="w3-top topNav">
      <div class="w3-bar w3-sand">
      <a href="index.php" class="w3-bar-item w3-button w3-light-blue">Home</a>
      <a href="images.php" class="w3-bar-item w3-button w3-hide-small">Images</a>
      <a href="video_tut.php" class="w3-bar-item w3-button w3-hide-small">Videos/tutorials)</a>
      <a href="others.php" class="w3-bar-item w3-button w3-hide-small">Junk-Sites</a>
      <div class="w3-dropdown-hover w3-right w3-hide-small">
          <button class="w3-button" >
            Account) <a class="fa fa-caret-down"></a>
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
      <a href="images.php" class="w3-bar-item w3-button ">Softwares</a>
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
    <div style="height:40px;"></div>
    <div class="w3-container w3-card-4">
      <div class="w3-row">
        <div id="videoTag" class="w3-container w3-col s12  w3-blue w3-card-4 w3-center w3-hide-small">
          <span class="w3-badge w3-black">V</span>
          <span class="w3-badge w3-black">I</span>
          <span class="w3-badge w3-black">D</span>
          <span class="w3-badge w3-black">E</span>
          <span class="w3-badge w3-black">O</span>
          <span class="w3-badge w3-black">S</span>
        </div>
        <div id="videoTagSmall" class="w3-container w3-blue w3-card-4 w3-center w3-hide-large w3-hide-medium">
          <span class="w3-badge w3-black">V</span>
          <span class="w3-badge w3-black">I</span>
          <span class="w3-badge w3-black">D</span>
          <span class="w3-badge w3-black">E</span>
          <span class="w3-badge w3-black">O</span>
          <span class="w3-badge w3-black">S</span>
        </div>
      </div>
        <?php
        echo "<div style='display:none;height:70px;padding-top:30px;' id='dbresults' class='w3-card-4 w3-grey w3-center'>";
        require_once 'conn.inc.php';
        include_once 'upload.php';
        echo "</div>";

    // downloadFile
        function downloadFile(){
        			if ($handle = opendir('uploads/') ) {
        				while (false !== ($entry = readdir($handle))) {
        					if ($entry != "." && $entry != ".." ){
        						return "<a class='fa fa-download' href='download.php?file=".$entry."' ></a>";
        					}
        				}
        			}
        		}
        		 // comparing file in server and name in the databases
        $resultOfFiles = glob('./uploads/*');
        $resultOfFiles = array_map(function($item ) {
        	return basename($item);
        }, glob('./uploads/*') );
        ?>
          <!-- upload file btn -->
          <div class="w3-center upload_btn">
            <button onclick="check();" class="w3-btn w3-hover-purple w3-round-xlarge" aria-hidden="true">Upload Files</button>
          </div>

        	<div class="w3-responsive">
            <?php
            //for updating the table in the HTML
            $query_uploads =$connDb->query( "SELECT `uploadName`, `videoTitle`, `About` FROM `videoUpload`");
              if (($query_uploads->num_rows) > 0) {
               // echo 'Total videos ',$query_uploads->num_rows ;
                                $size = count($resultOfFiles);
                                echo '<div class="w3-row">';
                                echo '<div class="w3-col s12 m3 w3-center" style="height:20px;">';
                                echo "Available Videos<hr>";
                                echo "</div>";
                                echo "</div>";
                                for ($i = 0; $i < $size; $i++){
                                  if ($row = $query_uploads->fetch_array()) {
                                    echo '<div class="w3-row">';
                                        echo '<div class="w3-col s12 m3 w3-center" style="height:200px;">';
                                            echo "<video width='250' height='150' controls>";
                                              echo " <source src='./".$row['uploadName']."'type='video/mp4'";
                                            echo "</video>";
                                        echo "</div>";
                                        echo '<div class="w3-col s12 m9 w3-center" style="height:200px;">';
                                            echo "<i class='w3-text-light-green'><b>Video Details...</b></i><br><b>Name : </b>".$row['videoTitle']."<br><b>Details : </b>".$row['About']."";
                                        echo "</div>";
                                    echo "</div>";

                                     }
                                     //$query_uploads->free();
                                  }
              }else {
                echo '<div class="w3-col s12 m12 w3-center w3-sand" style="height:200px;">';
                    echo "<p class='w3-text-light-green'>No Uploads Available</p>";
                echo "</div>";

            }
            ?>
            </div>

            <!-- Upload Video Modal -->
            <div id="fileModal" class="w3-modal">
              <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                  <span onclick="document.getElementById('fileModal').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
                  <img src="images/fileImg.jpg" alt="upload Files" style="width:30%" class="w3-circle w3-margin-top">
                </div>

                <form id ="uploadVideos" enctype="multipart/form-data" method="POST">
                  <div class="w3-section">
                    <label class="w3-center"><b>Please choose a file to upload</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="file"  name="uploaded">
                    <div class="w3-center">
                        <label><b>Video Name</b></label><br>
                          <input class=" w3-input " placeholder="Type Name" type="text" name="video_title" required><br>
                        <label><b>Description</b></label><br>
                        <textarea cols="25" rows="4" name="about" placeholder="About Upload"></textarea><br>
                        <label >
                          <input class="w3-btn-block w3-green w3-section w3-padding" type="submit" name="upload" value="Upload" id="`submit`">
                        </label>
                    </div>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                  <button onclick="document.getElementById('fileModal').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
                </div>

              </div>
            </div>
          </div>
        	</form>


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
                    <br>
                    <br>
                    <br>
                    <button type="button" name="button" class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge" onclick="submit()">submit</button>

                  </div>

              </div>
          </div>


      <!-- Footer -->
        <footer class="w3-container w3-teal w3-margin-0" >
            <div class="w3-container w3-teal w3-padding-32" >
              <p class="w3-center"> Thanks for visiting the site <br> <b>Total Visits  <?php include 'count_ip.php'; ?> </b></p>
              <p class="w3-center"> (powered by NICKSseditors</p>
            </div>
        </footer>
<script  src="jquery.min.js"></script>
<script  src="videoTut.js"></script>
<script type="text/javascript">

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
      // data:"{'pass':'"+pass+"','username':'"+username+"'}",
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
        alert("Not Accessible at the moment")
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
function navSmallScreens() {
    var x = document.getElementById("smallScreenNav");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


ifloggedin()
</script>
</body>
</html>
