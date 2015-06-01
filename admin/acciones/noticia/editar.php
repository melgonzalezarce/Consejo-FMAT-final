<?php
//incluye el dao con la información de la BD:
include '../../../BD/global.php';
if (!empty($_POST)) {
    $id_noticia = $_POST['id'];

    $fecha = $_POST['fecha'];
    $titulo = $_POST['titulo'];
    $cuerpo = $_POST['cuerpo'];

    $sentencia_sql = "UPDATE noticias SET fecha='$fecha',titulo='$titulo',cuerpo='$cuerpo' WHERE id_noticia=$id_noticia";

    ejecutar_query($sentencia_sql);

    header('location: ../../noticias.php');

}
$id_noticia = $_GET['id'];

$sentencia_sql = "SELECT * FROM noticias where  id_noticia=$id_noticia";
$noticia = ejecutar_query($sentencia_sql)->fetch_array();

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
        <legend>Editar Noticia</legend>

        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?php echo $noticia["titulo"]  ?>" />

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" value="<?php echo date("Y-m-d",strtotime($noticia["fecha"]))  ?>" />

        <label for="cuerpo">Cuerpo</label>
        <textarea name="cuerpo" id="cuerpo" cols="30" rows="10" ><?php echo $noticia["cuerpo"]  ?></textarea>

        <input type="hidden" name="id" value="<?php echo $id_noticia ?>">

        <button type="submit" class="btn">Editar Noticia</button>
        <a href="../../noticias.php"  class="btn">Regresar</a>
    </fieldset>
</form>
</body>
</html>


