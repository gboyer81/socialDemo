<?php
  ob_start();

  $timezone = date_default_timezone_set("AMERICA/NEW_YORK");

  $con = mysqli_connect("localhost", "root", "", "social");

  if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

?>
