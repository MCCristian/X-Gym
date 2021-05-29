<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css"> <!--Setam valorile prestabilite -->  
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">  <!-- Stil de scris Lato -->
    <link rel="stylesheet" type="text/css" href="Style/style.css">  <!--Facem legatura la fisierul css(href)-->
	<title>Proiect</title>
    <!--height: 800px -->
	
	<!--
	<style type="text/css">
	
	    @import url(http://weloveiconfonts.com/api/?family=entypo);

	</style>
	-->
	
</head>
<body style="background: url(Photos/signUpBack.jpg); background-repeat: no-repeat: no-repeat; background-size: 100% 100%	; height: 100vh; background-attachment:fixed; background-position: center;">
	
    <div class="header">
		<div class="logo">
            <a href="index.php"> <img src="Photos/logo.png" alt="Imaginea nu se poate incarca."> </a>
        </div>
		
		<div class="navsp">
			<ul>
			    <li><a href="index.php"> Home </a></li>
				<li><a href=""> Participanti </a></li> 
				<li><a href=""> Rezultate </a></li>
				<li><a href=""> Antrenori </a></li>
				<li><a href="about.php"> Despre </a></li>
				<li><a href=""> Activitati </a></li>
				<li><a href="noutati.php"> Noutati </a></li>				
			</ul>
	    </div>
		
		<div class="dropdown">
            <div class="dropbtn">Language</div> 
                <div class="dropdown-content">
                     <a href="#"> Romana </a>
                     <a href="#"> Engleza </a>
                     <a href="#"> Germana </a>
					 <a href="#"> Franceza </a>
                </div>
    </div>
		
    </div>
	
	<!-- WRAPPER -->
	<div id="wrapper">
	    <div class="box" id="facebook"><a href="https://web.facebook.com/pages/Colegiul-National-Dr-Ioan-Mesota-Brasov/713404632088861">&#62220;</a></div>
		<div class="box" id="twitter">&#62217;</div>
		<div class="box" id="google">&#62223;</div>
		<div class="box" id="linkedin">&#62232;</div>
	</div>
	
	<div class="loginsp">
		    <h1> Sign Up </h1>
			<form class="inputuri" method="POST" action="includes/signup.inc.php">
				<input type="text" name="nume" placeholder="Nume"><br>
				<input type="text" name="prenume" placeholder="Prenume"><br>
				<input type="text" name="username" placeholder="Nume de utilizator"><br>
				<input type="text" name="email" placeholder="Adresa de email"><br>  <!-- -->
				<!-- <select name="Sex">  <option> Masculin </option> <option> Feminin </option> </select> -->
				<input type="text" name="sex" placeholder="Sex"><br>
				<input type="number_format" name="clasa" placeholder="Clasa"><br>
				<input type="password" name="parola" placeholder="Parola"><br>
				<input type="password" name="confparola" placeholder="Confirmare parola"><br>
				<input type="submit" name="Sign Up" value="Sign Up">
			</form>
			<?php
			    if (isset($_GET['info']) && $_GET['info'] == 'ok') {
					echo '<p style="text-align: right; color: blue; font-size: 23px; margin-right: 35px;">Contul a fost creat cu succes.</p>';
				} else if (isset($_GET['info']) && $_GET['info'] == 'eroare') {
					echo '<p style="text-align: right; color: red; font-size: 23px; margin-right: 70px;">Contul nu a fost creat.</p>';
				} if (isset($_GET['info']) && $_GET['info'] == 'exista') {
					echo '<p style="text-align: right; color: green; font-size: 23px; margin-right: 17px;">Numele de utilizator deja exista.</p>';
				}
			?>
		    
	</div>
	</div>
	

</body>
</html>