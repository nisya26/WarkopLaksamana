<?php

	$user= $_POST['username'];
	$pass= $_POST['password'];
	
	if($user=="machriza" && $pass="icab"){
		echo"<h2>Login Berhasil</h2>";
		header('location:view/index.php');
		
	}
	else{
		echo"<h2>Login Gagal</h2>";
	}

?>