<div class=""w3-responsive>
<?php
require 'conn.inc.php';
include 'grabFiles.php';
  $res = $connDb->query("SELECT name, link FROM images WHERE name LIKE '%manupalation%'");
    if (($res->num_rows) > 0) {
                      $size = count($resultOfFiles);
                      echo '<div class="w3-row">';
                      echo "<div class='w3-container w3-card-4 w3-center w3-teal' style='height:50px;padding-top:5px'> Available Images<br>click for full Image</div>";
                      echo '<div class="w3-col s12 m3 w3-center" style="height:20px;">';
                      echo "</div>";
                      echo "</div>";
                        echo '<div class="w3-row">';
                      for ($i = 0; $i < $size; $i++){
                        if ($row = $res->fetch_array()) {

                              echo '<div class="w3-col s12 m3 l3 w3-row-padding w3-margin-top " style="float: left;margin:4px" >';
                                    echo "<div id='imgFlt' >";
                                    echo "<div class='w3-card-4 '>";
                                    echo "<img  src='./".$row['link']."' style='width:100%;max-width:300px;height:240px;' onclick='onClick(this)'> ";
                                    echo "<div class='w3-container'>";
                                    echo "<h5>".$row['name']."</h5>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                              echo "</div>";
                          //echo "".$resultOfFiles[$i]."</td>";
							

                           }
                        }
                        echo "</div>";
                        $res->free();
						echo "<div class='clearfix' style='clear:right;'></div>";
                      }
 ?>
</div>