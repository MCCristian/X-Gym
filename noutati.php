<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css"> <!--Setam valorile prestabilite -->  
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">  <!-- Stil de scris Lato -->
    <link rel="stylesheet" type="text/css" href="Style/style.css">  <!--Facem legatura la fisierul css(href)-->
	<title>Proiect</title>
    <!--height: 800px -->
	
	<style type="text/css">
	
        .headern {
			height: 90px;
			background-color: #efacac78;
		}
		
		.navn li {
			display: inline-block;
		}
		
		.navn li a {
			color: white;
			text-decoration: none;
			padding: 5px 20px;
			font-family: "Roboto", sans-serif;
			font-size: 20px;
		}
		
		.navn ul {
			text-align: right;
			margin-right: 10px;
			padding-top: 50px;
		}
		
		.navn ul li {
			display: inline-block;
			font-size: 20px;
			font-family: 'Lato';
			padding: 0px 3px;
			margin-right: 5px;
			padding-top: 0px;
			font-weight: bold;
		}
		
		.navn ul li:hover {
			border: 1px solid white;
			border-radius: 10px;
			background-color: yellow;
		}
	
	</style>

</head>
<body style="background: url(Photos/activitatiBack.jpg); background-repeat: no-repeat: no-repeat; background-size: 100% 100%; height: 100vh; background-attachment:fixed; background-position: center;">
	
	<!-- Header & Navigare -->
    <div class="headern">
		<div class="logo">
            <a href="index.php"> <img src="Photos/logo.png" alt="Imaginea nu se poate incarca."> </a>
        </div>

	    <div class="navn">
	    	<ul>
			    <li><a href="index.php"> Home </a></li>
			    <li><a href="signup.php"> Sign Up </a></li>
				<li><a href=""> Elevi </a></li> 
				<li><a href=""> Rezultate </a></li>
				<li><a href=""> Profesori </a></li>
				<li><a href="about.php"> Despre </a></li>
				<li><a href=""> Activitati </a></li>
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
	

</body>
</html>