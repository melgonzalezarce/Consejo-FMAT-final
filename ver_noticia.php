<?php 
include 'BD/global.php';
$id_noticia = $_GET['id'];
$sentencia_sql = "SELECT * FROM noticias where  id_noticia=$id_noticia";
$noticia = ejecutar_query($sentencia_sql)->fetch_array();
$sentencia_sql = 'SELECT * FROM noticias';
$noticias = ejecutar_query($sentencia_sql);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">

<head>
	<link href="http://gmpg.org/xfn/11" rel="profile">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<!-- Enable responsiveness on mobile devices-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<title>
		Inicio
	</title>

	<!-- CSS -->
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700|Abril+Fatface">

	<!-- Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/public/apple-touch-icon-144-precomposed.png">
	<link rel="shortcut icon" href="/public/favicon.ico">

</head>

<body>

	<?php include '_sidebar.php' ?>


	<div class="content container">
		<div class="posts">
			<div class="post">
				<h1 class="post-title">
					<a href="ver_noticia.php?id=<?php echo $noticia['id_noticia']; ?>">
						<?php echo $noticia["titulo"]; ?>
					</a>
				</h1>

				<span class="post-date"><?php echo date("Y-m-d",strtotime($noticia["fecha"])); ?></span>

				<?php echo $noticia["cuerpo"]; ?>
			</div>
		</div>
	</div>

</body>
</html>
