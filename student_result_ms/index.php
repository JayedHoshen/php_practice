<?php
  include_once ('connect.php'); // connecting db file

  // connection checking log-in file
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $userpassword = $_POST['password'];
    //echo "<h1>Your "."User Name: ".$username." & password: ".$userpassword."</h1>";
  }
  
  // database query
  $query = "SELECT * FROM user ORDER BY user_id ASC";
  $result = mysqli_query($connection, $query);


  // database and login file checking
  $found = false;

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($username == $row['user_name'] && $userpassword == $row['user_password']) {
        $found = true;
      }
      // echo "<h1>From Database User_ID: ".$row['user_id']."<br/>"." User_Name: ".$row['user_name']." and Password: ".$row['user_password']."</h1><br/>";
    }
  }

  // check database and form-input value
  if($found == true) {
    echo ("<h1>Successfuly login.</h1>");
    echo "<h1>Your "."User Name: ".$username." & password: ".$userpassword."</h1>";
  }
  else {
    header("Location: login.php"); // redirect to same page
    die();
  }

?>