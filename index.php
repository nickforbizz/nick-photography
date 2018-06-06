<html lang="en-US">
<head>
  <title>Get_It_From_Nick</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/webCss.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
  <style>
    #profile{
      margin-top: 10px;
      margin-left: 10px;
      height: 260px;
      width:700px;
      padding-left: 10px;
    }.prof{
      position: relative;
      float: left;
      padding-left: 16px;
      width: 270;
    }.divImg{
      width: 900px;
      background-color: red;

    }
    h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}


    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
        opacity: 0.7;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('images/img_truck.jpg');
        min-height: 100%;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("images/NickPhotography.jpg");
        min-height: 400px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url("images/Future-Trike.jpg");
        min-height: 400px;
    }

    .w3-wide {letter-spacing: 10px;}
    .w3-hover-opacity {cursor: pointer;}

    #googleMap {
        width: 100%;
        height: 400px;
        -webkit-filter: grayscale(90%);
        filter: grayscale(90%);
    }

    /* Turn off parallax scrolling for tablets and mobiles */
    @media only screen and (max-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
        }
    }

  </style>
</head>
<body>
  <header>
    <!-- nav on large screens -->
    <div class="w3-top topNav">
      <div class="w3-bar w3-sand">
      <a href="index.php" class="w3-bar-item w3-button w3-light-blue">Home</a>
      <a href="images.php" class="w3-bar-item w3-button w3-hide-small">Images</a>
      <a href="video_tut.php" class="w3-bar-item w3-button w3-hide-small">Videos/tuts)</a>
      <a href="others.php" class="w3-bar-item w3-button w3-hide-small">Sites</a>
      <div class="w3-dropdown-hover w3-right w3-hide-small">
          <button class="w3-button" >
            Code) <a class="fa fa-caret-down"></a>
          </button>
          <!-- <div id="demo" class="w3-dropdown-content w3-bar-block w3-card-2" style="right:10px">
              <a href="#" class="w3-bar-item w3-button w3-sand">Python</a>
              <a href="#" class="w3-bar-item w3-button w3-sand">Html</a>
              <a href="#" class="w3-bar-item w3-button w3-sand">Javascript</a>
              <a href="#" class="w3-bar-item w3-button w3-sand">Ajax $ Json</a>
          </div> -->
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
      <div >
      <div class="w3-dropdown-hover">
          <button class="w3-button" >
            Code) <a class="fa fa-caret-down"></a>
          </button>
          <div id="demo" class="w3-dropdown-content w3-bar-block w3-card-2" style="right:10px">
              <a href="#" class="w3-bar-item w3-button w3-sand">Python</a>
              <a href="#" class="w3-bar-item w3-button w3-sand">Html</a>
              <a href="#" class="w3-bar-item w3-button w3-sand">Javascript</a>
              <a href="#" class="w3-bar-item w3-button w3-sand">Ajax $ Json</a>
          </div>
      </div>
    </div>
      </div>
    </div>
    </header>
    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-opacity w3-display-container">
      <div class="w3-center" style="white-space:nowrap;height:100%">
        <span clasgs="w3-center w3-padding-xlarge w3-xlarge w3-wide w3-animate-opacity" >
          <img src="images/NICKSLOGO2.jpg" style="height:150px;width:350px;border-radius:25px;margin-top:15%" />
        </span>
      </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
      <h3 class="w3-center">ABOUT ME</h3>
      <p class="w3-center"><em>Quick Overview</em></p>
      <p>I can start by saying am hardworking, goal oriented and easily adapts in a new enviroment. One i set my mind on something i make sure i achive it.
         In this site I will be uploading images that i edit with photoshop and also some videos I make with blender. Its not the best but its something. <br>Enjoy .</p>
      <div class="w3-row">
        <div class="w3-col m6 w3-center w3-section">
          <p><b>My Name</b></p><br>
          <img src="images/blurlap.jpg" class="" onclick="onClick(this)" style="width:100%;max-width:250px;height:250px;" alt="Photo of Me">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-section">
          <p>Welcome to my site Gaez. If you find my work amazing,
             and would like to get these effects for your project,Some pics to post or any other use, kindly reach me and we can talk more. Click the icons at the bottom of the page to reach me on facebook, twitter, IG, email<br>
             if you like my work please leave a comment.</p>
        </div>
      </div>
    </div>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 w3-display-container">
      <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-light-grey w3-wide">Label</span>
      </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="" style="width:100%">
      <h3 class="w3-center">MY WORK</h3>
      <p class="w3-center"><em>Here are some of my latest edited pictures.<br> Click on the images to make them bigger</em></p><br>

      <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
      <div class="w3-content w3-container w3-padding-64 w3-row-padding w3-center ">

      <?php

            require 'conn.inc.php';
            include 'grabFiles.php';

            $sql="SELECT `link`,`name`  FROM `images` ORDER BY `id` DESC LIMIT 8";
            $query_run_uploads = mysql_query($sql);

            if (mysql_num_rows($query_run_uploads) > 0) {
                              $size = count($resultOfFiles);
                              echo '<div class="w3-row">';
                              echo "<div class='w3-container w3-card-4 w3-center w3-teal' style='height:50px;padding-top:5px'> Available Images<br>click for full Image</div>";
                              echo '<div class="w3-col s12 m3 w3-center" style="height:20px;">';
                              echo "</div>";
                              echo "</div>";
                                echo '<div class="w3-row">';
                              for ($i = 0; $i < $size; $i++){
                                if ($row = mysql_fetch_array($query_run_uploads)) {

                                      echo '<div class="w3-col s12 m5 w3-row-padding w3-margin-top " style="" >';
                                            echo "<div id='imgFlt' >";
                                            echo "<div class='w3-card-4'>";
                                            echo "<img  src='./".$row['link']."' style='width:100%;max-width:350px;height:240px;' onclick='onClick(this)'> ";
                                            echo "</div>";
                                            echo "</div>";
                                      echo "</div>";
                                  //echo "".$resultOfFiles[$i]."</td>";


                                   }
                                }
                                echo "</div>";
                              //  echo "</div>";
            }else {

                echo '  <div class="w3-col m3">';
                echo '     <img src="images/img_truck.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> ';
                echo '   </div> ';

                echo '   <div class="w3-col m3"> ';
                echo '     <img src="images/transparentTshirti.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> ';
                echo '   </div> ';

                echo '   <div class="w3-col m3"> ';
                echo '     <img src="images/blurlap.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> ';
                echo '     </div> ';

                echo '   <div class="w3-col m3"> ';
                echo '     <img src="images/NickPhotography.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> ';
                echo '   </div> ';
                // echo '   </div> ';

                echo ' <div class="w3-row-padding w3-center w3-section"> ';
                echo '   <div class="w3-col m3"> ';
                echo '     <img src="images/P1010007.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> ';
                echo '   </div> ';

                echo '   <div class="w3-col m3"> ';
                echo '     <img src="images/Audi-Wallpapers-3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> ';
                echo '   </div> ';

                echo '   <div class="w3-col m3"> ';
                echo '     <img src="images/Mercedes-Wallpapers-2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> ';
                echo '   </div> ';

                echo '   <div class="w3-col m3"> ';
                echo '     <img src="images/old_chevrolet_corvette-wallpaper-1680x1050.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"> ';
                echo '   </div> ';
                echo ' </div> ';
              //  echo ' </div> ';
          }
       ?>
     </div>
    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
      <span class="w3-closebtn w3-hover-red w3-text-white w3-xxxlarge w3-container w3-display-topright">&times;</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" style="max-width:100%">
      </div>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="bgimg-3 w3-display-container w3-margin-top">
      <div class="w3-display-middle">
         <span class="w3-xxlarge w3-text-light-grey w3-wide">CONTACT</span>
      </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64">
      <h3 class="w3-center">WHERE I WORK</h3>
      <p class="w3-center"><em>I'd love your feedback!</em></p>

      <div class="w3-row w3-section">
        <div class="w3-col  w3-container w3-section">
          <div class="w3-large w3-center w3-margin-bottom ">
            <i class="fa fa-map-marker w3-hover-text-black w3-center" stylpe="width:30px;margin-left:90px"></i> Nairobi, Kenya<br>
            <i class="fa fa-phone w3-hover-text-black w3-center" styple="width:30px;margin-left:90px"></i> Phone: +254 707722247<br>
            <i class="fa fa-envelope w3-hover-text-black w3-center" styple="width:30px;margin-left:90px"> </i> Email: nickforbizz@gmail.com<br>
          </div>

          <div class="w3-row w3-section w3-center">
            <div class="w3-large w3-margin-bottom fa ">
              <div class="w3-text-blue"  style="margin-left:10px"><h4>For More Information VISIT:</h4></div>
              <i class="fa fa-twitter" style="font-size:30px;margin:20px;"></i>
              <i class="fa fa-facebook" style="font-size:30px;margin:20px;"></i>
              <i class="fa fa-instagram" style="font-size:30px;margin:20px;"></i>
              <i class="fa fa-google-plus" style="font-size:30px;margin:20px;"></i>
            </div>
          </div>


    <script>

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
        }
    }
    </script>
      </div>
    </div>
  </div>
  <!-- <div class="w3-container w3-card-8 coverDiv">
        <div  class="w3-container w3-center w3-card-4  w3-padding-32 callcss" ><a  style="text-decoration:none;" href="images.php"> <h3> <i> SOFTWARES </i> </h3></a> </div>
        <div class="w3-container w3-center w3-card-4  w3-padding-32" > <a  style="text-decoration:none;" href="paperwork.php"> <h3> <i> PAPERWORK(PDFS) </i> </h3></a> </div>
        <div class="w3-container w3-center w3-card-4  w3-padding-32 callcss" > <a  style="text-decoration:none;" href="video_tut.php"> <h3> <i> VIDEOS(TUTORIALS) </i> </h3></a> </div>
        <div class="w3-container w3-center w3-card-4  w3-padding-32" ><a  style="text-decoration:none;" href="junksites.php"> <h3> <i> JUNK SITES </i> </h3></a> </div>
  </div> -->
  <!--Comments Session  -->
  <div  onloard="loadContentsAsycp('commentsDiv', comments.php)" >
      <form class=" w3-light-grey"  enctype="multipart/form-data" method="POST">

        <div class="w3-container w3-light-gray w3-card-4 comments" style="padding-bottom:0px">
          <div class="w3-center"><span class="fa fa-comment icon">  Comments</span><br>
            <span class="w3-btn w3-dark-grey" id="viewComments">View Comments</span>
            <?php include 'comments.php';?>
            <div id="commentsDiv" >
              <?php

              //   if (isset($_POST['comments']) && isset($_POST['email'])) {
              $array=array();
                   $query_comnts = "SELECT `email`, `comments` FROM `commentstable` ORDER BY `id`";
                   $query_run_comnts = mysql_query($query_comnts);
                   if (mysql_num_rows($query_run_comnts) == 0) {
                     echo "No Comments, Be the first to comment";
                   }else {
                     while ($query_row = mysql_fetch_assoc($query_run_comnts)){
                       array_push($array,$query_row);
                     }
                   }
                   //echo json_encode($array);
                   $messages=array();
                   foreach ($array as $key => $value) {

                     if(!isset($messages["$value[email]"])){
                        $messages["$value[email]"]=array();
                        array_push($messages["$value[email]"],$value["comments"]);
                     }else {
                       # code...
                       array_push($messages["$value[email]"],$value["comments"]);

                     }

                     # code...
                   }
                 //}

                // echo json_encode($messages);
                echo "<div  id='commentsbar' class='w3-light-blue' style='display:none;padding-left:10px;' >";
                 foreach ($messages as $key => $value) {

                   foreach ($value as $key2) {
                     echo "<div >";
                     echo " <div class='w3-light-blue innercomments'> ".$key2." </div>";
                   }
                   echo "<div class='w3-left w3-light-blue' >By: ".$key." </div><hr> ";
                   echo "</div>";
                 }
                 echo "</div>";
              ?>
            </form>
            </div>
          </div>
        </div>
        <h2>Join The Discussion</h2>
        <!-- <input class="w3-input w3-animate-input" type="text" style="width:135px"><br> -->
        <p>
          <form  method="post">


                    <label class="w3-label w3-validate">Email</label>
          <input class="w3-input  comntBox" placeholder="Enter your email..." type="email" name="email" required>
        </p>
        <label class="w3-label w3-validate">Comment</label>
        <input class="w3-input w3-border w3-animate-input comntBox" type="text" name="comments" placeholder="Post your Thoughts..." style="width:30%;height:70px" required><br>
        <p><input type="submit" value="send"></p>

      </form>
    </div>


  <footer class="w3-container w3-teal" style="margin-bottom:0">
      <div class="w3-container w3-teal w3-padding-32" >
        <p class="w3-center"> Thanks for visiting the site <br> <b>Total Visits <?php include 'count_ip.php'; ?> </b></p>
        <p class="w3-center"> &copy- Get_It_From_Nick</p>
      </div>
  </footer>

  <script  src="jquery.min.js"></script>
  <script  src="jsfile.js"></script>
  <script type="text/javascript">

  </script>
</body>
</html>
