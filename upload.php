<?php
require_once 'conn.inc.php';

$time=time();

if (isset($_POST['upload']) ){

	if (isset($_FILES['uploaded']) ) {

		$location = "uploads/";
		$file_ext = strtolower(end(explode('.', $_FILES['uploaded']['name']) ));
		$upload_name =$_FILES['uploaded']['name'];
		$target = $upload_name;
		$file_tmp = $_FILES['uploaded']['tmp_name'];
		$uploaded_size = $_FILES['uploaded']['size'];
		$uploaded_type = $_FILES['uploaded']['type'];
		$error = $_FILES['uploaded']['error'];
		$about = $_POST['about'];
		$video_title = $_POST['video_title'];
		$ok = 1;


			// place some value if $about is empty
		if (empty($about) ){
			$about = "No Description.";
		}
		if (empty($video_title)) {
			$video_title = $_FILES['uploaded']['name'];
		}
		$expensions = array("webm", "mkv", "flv", "vob", "ogv", "ogg", "drc", "gif", "gifv", "mng", "avi", "f4b", "f4a", "f4p", "f4v", "nsv", "mov", "wmv", "yuv", "rm", "rmvb", "asf", "amv", "mp4", "m4p", "m4v", "mpg", "mp2", "mpeg", "mpe", "mpv", "m2v", "svi", "3gp", "3g2", "mxf", "roq");
			// check the file type and set $ok var
		if (in_array($file_ext, $expensions) === false ){
			echo "please Upload Videos Only".'<br>';
			$ok = 0;
		}
			//check the size of file and set $ok var
		if ($uploaded_size < 10 ){
			echo "The file is too small.".'<br>';
			echo "uploaded size is : ".$uploaded_size.'<br>';
			$ok = 0;
		}

		if (file_exists($target)){
			echo "Sorry, file already exists".'<br>';
			$ok = 0;
		}else {

			//use $ok var to submit data
			if (!empty($upload_name) ) {
				if ($ok == 0 ){
					echo "The file couldn't be uploaded ".'<br>';

				 }
					//store the file to server
				 else if(move_uploaded_file($file_tmp,$location.$time)){

					 echo "The File ".$location.$target." has been uploaded".'<br>';

					 //store the filename and about to the database
					 $uploadnamex2=$location.$time;
							 $query = $connDb->query("INSERT INTO `videoUpload` (uploadName, About,videoTitle) VALUES ('$uploadnamex2', '$about','$video_title')")  or die($db_error);							
							 unset($_POST['upload']);
 							header("refresh:1;video_tut.php");
							
						 }
				 }else {
					$ok = 0;
					echo "This file couldn't be uploaded ".'<br>';
					echo $error;
					}

				// Downloading file

			}
		}
	}else {
	echo "<b><i>Post something</i></b>".'<br>';
}


?>
