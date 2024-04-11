<?php

session_start();

$connect = mysqli_connect("localhost","root","","bmdproject");

if(!$connect){
	die('connection Failed'. mysqli_connect_error());
}

if(isset($_POST['like'])){

  $query = "INSERT INTO likesdata (likes) VALUES (1)";
  $query_run = mysqli_query($connect, $query);
  $likes = "SELECT COUNT(*) AS count FROM 'likesdata'";
  $query_result = mysqli_query($connect, $likes);

if($query_run){
  header('Location: index.php');
}
}


?>
<?php 

    $likes = "SELECT COUNT(*) AS count FROM likesdata";
    $query_result = mysqli_query($connect, $likes);

    while($row = mysqli_fetch_assoc($query_result)){
      $_SESSION['likes'] = $row['count'];
    }

?>