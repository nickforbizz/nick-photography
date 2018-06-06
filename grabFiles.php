<?php

// Grabbing names of softwares in FilesystemIterator
$resultOfFiles = glob('./imageUploads/*');
$resultOfFiles = array_map(function($item ) {
  return basename($item);
}, glob('./imageUploads/*') );

?>
