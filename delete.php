<?php

session_start();

$connect = mysqli_connect("localhost","root","","bmdproject");

if(!$connect){
	die('connection Failed'. mysqli_connect_error());
}

if(empty($_SESSION['user'])){
  die('Access Denied');
}

if(isset($_POST['delete'])){

  $event_id = mysqli_real_escape_string($connect, $_POST['delete']);

  $query = "DELETE FROM eventdata WHERE id='$event_id'";
  $query_run = mysqli_query($connect, $query);

  if($query_run){
    $_SESSION['message'] = "Event was successefully deleted";
    header('Location: profile.php');
    exit(0);
  }
  else{
    $_SESSION['message'] = "Something went Wrong, Event not deleted";
    header("refresh:0");
    exit(0);
  }
}

?>