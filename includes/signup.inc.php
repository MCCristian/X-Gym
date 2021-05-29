<?php

require 'conectare.php';    //includem fisierul
if (!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['sex']) && !empty($_POST['clasa']) && !empty($_POST['parola']) && !empty($_POST['confparola']) && isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['sex']) && isset($_POST['clasa']) && isset($_POST['parola']) && isset($_POST['confparola'])) {


    //preluam datele si le punem in niste variabile
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
	$username = strtolower($_POST['username']);
    $email = $_POST['email'];
    $sex = $_POST['sex']; 	
    $clasa = $_POST['clasa'];
    $parola = $_POST['parola'];
    $confparola = $_POST['confparola'];
    
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    $confpassword_hashed = password_hash($confparola, PASSWORD_DEFAULT);
    
	$sql = "SELECT username FROM users WHERE username='$username'";
	$result = mysqli_query($conectare, $sql);
	$check = mysqli_num_rows($result);
	
	if ($check > 0) {
		header("Location: ../signup.php?info=exista");
		die();
	} else {
		 // trimitem variabilele catre o baza de date
        $sql = "INSERT INTO users (nume, prenume, username, email, sex, clasa, parola, confparola) VALUES ('$nume',  '$prenume', '$username', '$email', '$sex', '$clasa', '$password_hashed', '$confpassword_hashed')";
        $result = mysqli_query($conectare, $sql);
        
        header ("Location: ../signup.php?info=ok");
	}
	
} else {
	header("Location: ../signup.php?info=eroare");
}