<?php
$server = "localhost:8809";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password,"spotify" );
if(mysqli_connect_errno())
{
      die("connection to this database failed due to".mysqli_connect_error()); 
}
echo "<h1> THANKYOUUU FOR VOTING </h1>";
$fav_singer=$_POST['fav_singer'];
$sql = "INSERT INTO `fav`(`fav_singer`) VALUES ('$fav_singer')";
mysqli_query($con,$sql);
echo "<br>";
header('Location: successfull.html');
?>