<?php

$conectare = mysqli_connect('localhost', 'root', '', 'autentificare');  //retinem conectarea la baza de date

if (!$conectare) {
	die ('Conectarea la baza de date nu a reusit.');
}