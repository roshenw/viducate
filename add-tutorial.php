<?php
   /* ini_set('display_errors', 'On');
       $db = "w4111g.cs.columbia.edu:1521/adb";

      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }  
      $name= $_GET['tut-name'];
	  $tag= $_GET['tag-name'];
$adding = oci_parse($conn, "INSERT Into Taught_By Values('10004TA', 'AAA0018', '$name', '0', '0.0')");
oci_execute($adding); 

echo "<h1> added video </h1>";   */
	oci_close($conn);
	echo "<h1>HELLo</h1>";

?>