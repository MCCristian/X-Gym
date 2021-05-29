<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css"> <!--Setam valorile prestabilite -->  
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">  <!-- Stil de scris Lato -->
    <link rel="stylesheet" type="text/css" href="Style/style.css">  <!--Facem legatura la fisierul css(href)-->
	<title>Proiect</title>
    <!--height: 800px -->
</head>

<body style="background: url(Photos/backMain.jpg);
			 background-repeat: no-repeat: no-repeat;
			 background-size: 100% 100%;
			 height: 100vh;
			 background-attachment:fixed;
		 	 background-position: center;">
	
	<!-- Header & Navigare -->
    <div class="header">
		<div class="logo">
            <a href="index.php"> <img src="Photos/logo.png" alt="Imaginea nu se poate incarca."> </a>
        </div>

	    <div class="nav">
	    	<ul>
			    <li><a href="signup.php"> Sign Up </a></li>
				<li><a href=""> Participanti </a></li> 
				<li><a href=""> Rezultate </a></li>
				<li><a href=""> Antrenori </a></li>
				<li><a href="about.php"> Despre </a></li>
				<li><a href=""> Activitati </a></li>
				<li><a href="noutati.php"> Noutati </a></li>
	    	</ul>
	    </div>  	 
	    <!-- Dropdown -->
	    <div class=" dropdown">
            <div class="dropbtn">Language</div> 
                <div class="dropdown-content">
                    <a href="#"> Romana </a>
                    <a href="#"> Engleza </a>
                    <a href="#"> Germana </a>
	                <a href="#"> Franceza </a>
                </div>
        </div>
    </div
	
	 
	<!-- WRAPPER -->
	<div id="wrapper">
	    <div class="box" id="facebook"><a href="https://web.facebook.com/pages/Colegiul-National-Dr-Ioan-Mesota-Brasov/713404632088861">&#62220;</a></div>
		<div class="box" id="twitter">&#62217;</div>
		<div class="box" id="google">&#62223;</div>
		<div class="box" id="linkedin">&#62232;</div>
	</div>
	
	<?php
	if (!isset($_SESSION['id'])) {
		echo 
		'
		<div class="login">
				<h1>Bine ai venit!</h1>
				<form method="POST" action="includes/login.inc.php">
					<input type="text" name="email" placeholder="Email"><br>
					<input type="password" name="parola" placeholder="Parola"><br>
					<input type="submit" value="Log In">
				</form>';
				if (isset($_GET['info']) && $_GET['info'] == 'gresit') {
					echo '<p style="text-align: center; color: red; font-size: 20px; ">Parola introdusa este gresita.</p>';
				}
				echo'
			</div>
		</div>
	';
	} else {
		echo '<p style="text-align: center; font-family: Lato; font-size: 35px;padding-top: 100px;">Prenumele meu este '.$_SESSION['prenume'].'!';
		echo '
		<div class="login">
			<form action="includes/logout.inc.php" style="text-align: center;">
				<input type="submit" value="Log Out">
			</form>
		</div>
		';
	}
	?>

	
	<!-- Login -->
	<!--
	<div class="login">
	    <h2> Login </h2>
		<form method="POST" action="includes/login.inc.php">
	        <input type="text" name="email" placeholder="Adresa de email"><br>
			<input type="password" name="parola" placeholder="Parola"><br>
			<input type="submit" value="Log In">
		</form>
		php!
		    if(isset($_GET['info']) && $_GET['info'] == 'gresit') {
				echo '<p style="text-align: right; color: red; font-size: 23px; margin-right: 70px;">Parola este gresita.</p>';
			}
		php!
	</div>
	-->
	
</body>
</html>











