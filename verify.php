<?php
require("conn.inc.php");

$password="nik";
$username = "NICKS";
// if (isset($_POST["username"]) && isset($_POST["pass"])) {

  if ($_POST["username"]==$username) {
    if($_POST["pass"]==$password){
      echo "ACCESS_GRANTED";
    }
  }else {
      echo "ACCESS_DENIED";
    }
// }

 ?>
