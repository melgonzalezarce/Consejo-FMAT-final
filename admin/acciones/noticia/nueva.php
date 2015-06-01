<?php
if (!empty($_POST)) {
    session_start();


    //incluye el dao con la información de la BD:
	include '../../../BD/global.php';

	$fecha = $_POST['fecha'];
	$titulo = $_POST['titulo'];
	$cuerpo = $_POST['cuerpo'];
    $usuario = $_SESSION['id_user'];

	$sentencia_sql = "INSERT INTO noticias(fecha, titulo, cuerpo, id_usuario) VALUES('$fecha', '$titulo', '$cuerpo', $usuario)";

	ejecutar_query($sentencia_sql);

	header('location: ../../noticias.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/css/login.css"/>
    <link rel="stylesheet" href="../../../public/css/botones.css"/>
    <link rel="stylesheet" href="../../../public/css/formulario.css"/>

    <style>
        body{
            margin: 0 auto;
            max-width: 75%;
        }
    </style>

</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <legend>Nueva Noticia</legend>

        <label for="titulo">Titulo</label>
        <input type="text" name="titulo"/>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha"/>

        <label for="cuerpo">Cuerpo</label>
        <textarea name="cuerpo" id="cuerpo" cols="30" rows="10"></textarea>

        <button type="submit" class="btn">Agregar Noticia</button>
        <a href="../../noticias.php"  class="btn">Regresar</a>
    </fieldset>
</form>
</body>
</html>


