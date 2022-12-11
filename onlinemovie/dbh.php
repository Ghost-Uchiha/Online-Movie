<?php
  $conn = mysqli_connect("localhost","root","","movieDB");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
