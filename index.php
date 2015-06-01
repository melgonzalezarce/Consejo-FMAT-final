<?php 
include 'BD/global.php';
$sentencia_sql = 'SELECT * FROM noticias JOIN usuarios ON noticias.id_usuario = usuarios.id_usuario';
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

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="RSS" href="/atom.xml">
</head>

<body>

<?php include '_sidebar.php' ?>


  <div class="content container">
    <div class="posts">
      <?php foreach($noticias as $noticia):?>
      <div class="post">
        <h1 class="post-title">
          <a href="ver_noticia.php?id=<?php echo $noticia['id_noticia']; ?>">
            <?php echo $noticia['titulo'] ?>
          </a>
            <span style="font-size: .5em" color: cornflowerblue" >Publicado por: <?php echo $noticia['nombre_usuario'] ?></span>
        </h1>

        <span class="post-date"><?php echo date("Y-m-d",strtotime($noticia["fecha"]))?></span>

        <div>
          <?php echo substr($noticia['cuerpo'], 0, 50);?>
        </div>

      </div>
      <?php endforeach ?>
    </div>
  </div>

</body>
</html>
