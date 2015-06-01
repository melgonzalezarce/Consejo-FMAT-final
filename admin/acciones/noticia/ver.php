<?php
include '../../../BD/global.php';
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
<form  disabled>
    <fieldset>
        <legend>Ver Noticia</legend>

        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?php echo $noticia["titulo"]  ?>" disabled/>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" value="<?php echo date("Y-m-d",strtotime($noticia["fecha"]))  ?>" disabled/>

        <label for="cuerpo">Cuerpo</label>
        <textarea name="cuerpo" id="cuerpo" cols="30" rows="10" disabled><?php echo $noticia["cuerpo"]  ?></textarea>

        <a href="../../noticias.php"  class="btn">Regresar</a>
    </fieldset>
</form>
</body>
</html>


