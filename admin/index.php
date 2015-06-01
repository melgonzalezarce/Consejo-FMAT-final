<?php 

session_start();

if (isset($_SESSION["id_user"])) {
	header("Location: noticias.php");
}else{
	header("Location: login.php");
}