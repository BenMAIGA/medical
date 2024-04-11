<?php
$connect = mysqli_connect("localhost","root","","bmdproject");

if(!$connect){
	die('connection Failed'. mysqli_connect_error());
}

$regionId = isset($_POST['regionId']) ? $_POST['regionId'] : 0;
$regionId = isset($_POST['districtId']) ? $_POST['districtId'] : 0;
$command = isset($_POST['get']) ? $_POST['get'] : "";

switch ($command) {
  case "rigion":
    $statement = "SELECT * FROM regions";
    $dt = mysqli_query($connect, $statement);
    while ($result = mysqli_fetch_array($dt)){
      echo $result = "<option value=". $result['id'] . ">" . $result['Region'] ."</option>";
    }
    break;

  case "district";
    $result1 = "<option>Select District</option>";
    $statement = "SELECT * FROM districts";
    $dt = mysqli_query($connect, $statement);
    while ($result = mysqli_fetch_array($dt)){
      echo $result = "<option value=". $result['id'] . ">" . $result['district'] ."</option>";
    }
}
?>