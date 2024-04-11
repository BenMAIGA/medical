<?php

session_start();

$connect = mysqli_connect("localhost","root","","bmdproject");

if(!$connect){
	die('connection Failed'. mysqli_connect_error());
}

if (isset($_POST['update_event']))
{

  //* Registration input data *//
  $id = mysqli_real_escape_string($connect, $_POST['id']);
 
  $event = mysqli_real_escape_string($connect, $_POST['event']);
  $sub = mysqli_real_escape_string($connect, $_POST['sub']);
  $photo = mysqli_real_escape_string ($connect, $_FILES['photo']['name']);
  $dedicate = mysqli_real_escape_string($connect, $_POST['dedicate']);
  $city = mysqli_real_escape_string($connect, $_POST['city']);
  $place = mysqli_real_escape_string($connect, $_POST['place']);
  $date = mysqli_real_escape_string($connect, $_POST['date']);
  $date1 = mysqli_real_escape_string($connect, $_POST['date1']);
  $sms = mysqli_real_escape_string($connect, $_POST['sms']);

  $query = "UPDATE eventdata SET  event='$event', sub='$sub', photo='$photo', dedicate='$dedicate', city='$city', place='$place', date='$date', date1='$date1', sms='$sms' WHERE id='$id'";
  $query_run = mysqli_query($connect, $query);

  if ($query_run){
    move_uploaded_file($_FILES['photo']['tmp_name'], "$photo");
    $_SESSION['message'] = "You have successefully Update your Event";
    header('Location: profile.php');
    exit(0);

  }else
  {
    echo "error";
    exit(0);
  }

}

if (isset($_POST['add_event']))
{

  //* Registration input data *//
 
  $event = mysqli_real_escape_string($connect, $_POST['event']);
  $sub = mysqli_real_escape_string($connect, $_POST['sub']);
  $photo = mysqli_real_escape_string ($connect, $_FILES['photo']['name']);
  $dedicate = mysqli_real_escape_string($connect, $_POST['dedicate']);
  $city = mysqli_real_escape_string($connect, $_POST['city']);
  $place = mysqli_real_escape_string($connect, $_POST['place']);
  $date = mysqli_real_escape_string($connect, $_POST['date']);
  $date1 = mysqli_real_escape_string($connect, $_POST['date1']);
  $sms = mysqli_real_escape_string($connect, $_POST['sms']);
  $code = mysqli_real_escape_string($connect, $_POST['code']);

//----- insert into database -----//
  $sql = "INSERT INTO eventdata (event,sub,photo,dedicate,city,place,date,date1,sms,code) 
  VALUES ('$event','$sub','$photo','$dedicate','$city','$place','$date','$date1','$sms','$code')";
  $result = mysqli_query($connect, $sql);
  
  if ($result){
    move_uploaded_file($_FILES['photo']['tmp_name'], "$photo");
    $_SESSION['message'] = "You have successefully add new Event";
    header('Location: event-add.php');
    exit(0);
  }
  else{
    $_SESSION['message'] = "Something went Wrong, Event not Added";
    header("refresh:0");
    exit(0);
  }

}
?>