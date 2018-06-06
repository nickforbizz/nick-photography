<?php
require_once 'conn.inc.php';

$time=time();

if (isset($_POST['upload']) ){

	if (isset($_FILES['uploaded']) ) {

		$location = "imageUploads/";
		$file_ext = strtolower(end(explode('.', $_FILES['uploaded']['name']) ));
		$upload_name =$_FILES['uploaded']['name'];
		$target = $upload_name;
		$file_tmp = $_FILES['uploaded']['tmp_name'];
		$uploaded_size = $_FILES['uploaded']['size'];
		$uploaded_type = $_FILES['uploaded']['type'];
		$error = $_FILES['uploaded']['error'];
		$name = $_POST['name'];
		$ok = 1;


			// place some value if $about is empty
		if (empty($name)) {
			$link = $_FILES['uploaded']['name'];
		}
		$expensions = array("gif", "jpeg", "jpg", "png");
			// check the file type and set $ok var
		if (in_array($file_ext, $expensions) === false ){
			echo "please Upload images Only".'<br>';
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


					 $uploadnamex2=$location.$time;
					 //store the filename and about to the database

							 $query = $connDb->query("INSERT INTO `images` (link, name) VALUES ('$uploadnamex2', '$name')") or die($db_error);
								 unset($_POST['upload']);
								 header("Location: images.php");
								 
				// Downloading file
					}
			}else {
					$ok = 0;
					echo "This file couldn't be uploaded ".'<br>';
					echo $error;
					}
			}
		} else {
		echo "Nothing To Post".'<br>';
	}
} else {
	return false;
}


?>
