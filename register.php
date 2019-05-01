<?php

  $con = mysqli_connect("localhost", "root", "", "social");

  if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

  //Variable declaration
  $fname = ""; //First name
  $lname = ""; //Last name
  $em = ""; //Email
  $em2 = ""; //Confirm Email
  $password = ""; //Password
  $password2 = ""; //Confirm Password
  $date = ""; //Signup date
  $errorArray = ""; //Error array

  if(isset($_POST['register_button'])) {
    $fname = strip_tags($_POST['reg_fname']);
    $fname = str_replace(" ", "", $fname);
    $fname = ucfirst(strtolower($fname));

    $lname = strip_tags($_POST['reg_lname']);
    $lname = str_replace(" ", "", $lname);
    $lname = ucfirst(strtolower($lname));

    $em = strip_tags($_POST['reg_email']);
    $em = str_replace(" ", "", $em);
    $em = ucfirst(strtolower($em));

    $em2 = strip_tags($_POST['reg_email2']);
    $em2 = str_replace(" ", "", $em2);
    $em2 = ucfirst(strtolower($em2));

    $password = strip_tags($_POST['reg_password']);
    $password2 = strip_tags($_POST['reg_password2']);

    $date = date("Y-m-d");

  }

?>


<html>
<head>
  <title>Welcome to SwirlFeed!</title>
</head>
<body>

  <form action="register.php" method="POST">
    <p>
      <input type="text" name="reg_fname" placeholder="First name" required />
    </p>
    <p>
      <input type="text" name="reg_lname" placeholder="Last name" required />
    </p>
    <p>
      <input type="email" name="reg_email" placeholder="Email" required />
    </p>
    <p>
      <input type="email" name="reg_email2" placeholder="Confirm" required />
    </p>
    <p>
      <input type="password" name="reg_password" placeholder="Password" required />
    </p>
    <p>
      <input type="password" name="reg_password2" placeholder="Confirm" required />
    </p>
    <p>
      <button type="submit" name="register_button">Register</button>
    </p>
  </form>


</body>
</html>
