<?php

session_start();

$connect = mysqli_connect("localhost","root","","bmdproject");

if(!$connect){
	die('connection Failed'. mysqli_connect_error());
}

// updeting profile data //
if(isset($_POST['update'])){

  $member_id = mysqli_real_escape_string($connect, $_POST['member_id']);
  $category = mysqli_real_escape_string($connect, $_POST['category']);
  $tin = mysqli_real_escape_string($connect, $_POST['tin']);
  $brand = mysqli_real_escape_string($connect, $_POST['brand']);
  $name = mysqli_real_escape_string($connect, $_POST['name']);
  $pass = mysqli_real_escape_string($connect, $_POST['pass']);
  $pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
  $file = mysqli_real_escape_string($connect, $_POST['file']);
  $city = mysqli_real_escape_string($connect, $_POST['city']);
  $distr = mysqli_real_escape_string($connect, $_POST['distr']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $link = mysqli_real_escape_string($connect, $_POST['link']);
  $link1 = mysqli_real_escape_string($connect, $_POST['link1']);
  $link2 = mysqli_real_escape_string($connect, $_POST['link2']);
  $other = mysqli_real_escape_string($connect, $_POST['other']);
  $phone = mysqli_real_escape_string($connect, $_POST['phone']);
  $phone1 = mysqli_real_escape_string($connect, $_POST['phone1']);

  if($pass === $pass1){

    $query = "UPDATE webdata SET  category='$category', tin='$tin', brand='$brand', name='$name', pass='$pass', file='$file', 
   city='$city', distr='$distr', email='$email', link='$link', link1='$link1', link2='$link2', 
    other='$other', phone='$phone', phone1='$phone1' WHERE id='$member_id' ";
    $query_run = mysqli_query($connect, $query);

    echo "Done";
  }
  else
  {
    die(mysqli_connect_error());
  }

}

if (isset($_POST['register']))
{

  //* Registration input data *//
  $category = mysqli_real_escape_string($connect, $_POST['category']);
  $tin = mysqli_real_escape_string($connect, $_POST['tin']);
  $brand = mysqli_real_escape_string($connect, $_POST['brand']);
  $name = mysqli_real_escape_string($connect, $_POST['name']);
  $pass = mysqli_real_escape_string($connect, $_POST['pass']);
  $pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
  $file = mysqli_real_escape_string ($connect,$_FILES['file']['name']);
  $city = mysqli_real_escape_string($connect, $_POST['city']);
  $distr = mysqli_real_escape_string($connect, $_POST['distr']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $link = mysqli_real_escape_string($connect, $_POST['link']);
  $link1 = mysqli_real_escape_string($connect, $_POST['link1']);
  $link2 = mysqli_real_escape_string($connect, $_POST['link2']);
  $other = mysqli_real_escape_string($connect, $_POST['other']);
  $phone = mysqli_real_escape_string($connect, $_POST['phone']);
  $phone1 = mysqli_real_escape_string($connect, $_POST['phone1']);

//----- insert into database -----//

  
  if ($pass === $pass1){
    
$sql = "INSERT INTO webdata (category,tin,brand,name,pass,file,city,distr,email,link,link1,link2,other,phone,phone1) 
    VALUES ('$category','$tin','$brand','$name','$pass','$file','$city','$distr','$email','$link','$link1','$link2','$other','$phone','$phone1')";
    $result = mysqli_query($connect, $sql);
    header('Location: register.php');
    echo "good";
    if($result){
      move_uploaded_file($_FILES['file']['tmp_name'], "$file");
    }
  }

}
?>