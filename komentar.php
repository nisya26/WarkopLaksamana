<?php 
include "koneksi.php";

$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];



if(!empty($message) && !empty($name) && !empty($email))
{
	mysqli_query($con, "insert into komentar (message,name,email) values ('$message','$name','$email')");
	header("location:komentar.php");
	
}

else{
	header("location:index.php");
	
}
?>