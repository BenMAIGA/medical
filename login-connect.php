<?php

session_start();

$connect = mysqli_connect("localhost","root","","bmdproject");

if(!$connect){
	die('connection Failed'. mysqli_connect_error());
}

if (isset($_POST['login'])){

  $brand = mysqli_real_escape_string($connect, $_POST['brand']);
  $pass = mysqli_real_escape_string($connect, $_POST['pass']);

  $query = "SELECT * FROM webdata WHERE brand='$brand' && pass='$pass'";
  $query_run = mysqli_query($connect, $query);
  $num = mysqli_num_rows($query_run);

  if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $item){
     header('Location: profile.php');
      $_SESSION['user'] = $item['brand'];
      $_SESSION['tin'] = $item['tin'];
      echo "welcome";
      echo $_SESSION['user'];
      
    }
  }
  else
  {
    $_SESSION['message'] = "Wrong Username Or Password";
    header('Location: login.php');
    exit(0);
  }
}

?>