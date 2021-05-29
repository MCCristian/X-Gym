<?php

session_start();
require 'conectare.php';

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['parola']) && !empty($_POST['parola'])) {
	
	$email = strtolower($_POST['email']);
	$parola = $_POST['parola'];
	
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($conectare, $sql);
	
	$row = $result->fetch_assoc();
	$hash = $row['parola'];
	
	$check = password_verify($parola, $hash);
	
	if ($check == 0) {
		header("Location: ../index.php?info=gresit");
		die();
	} else {
		
		$sql = "SELECT * FROM users WHERE email = '$email' AND parola = '$hash'";
		$result = mysqli_query($conectare, $sql);
		
		if (!$row = $result->fetch_assoc()) {
			echo 'Parola sau email-ul nu se potriveste.';
		} else {
			$_SESSION['id'] = $row['id'];
			$_SESSION['nume'] = $row['nume'];
			$_SESSION['prenume'] = $row['prenume'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
		}
		header("Location: ../index.php");
	}
}