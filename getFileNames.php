<?php

// comparing file in server and name in the databases
$resultOfFiles = glob('./uploads/*');
$resultOfFiles = array_map(function($item ) {
return basename($item);
}, glob('./uploads/*') );
$size = count($resultOfFiles);

for ($i=0; $i < $size; $i++) {
  echo $i." ".$resultOfFiles[$i].'<br>';

}
?>
