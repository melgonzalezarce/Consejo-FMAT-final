<?php

include '../BD/global.php';

$sentencia_sql = 'SELECT * FROM noticias';

$noticias = ejecutar_query($sentencia_sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/login.css"/>
    <link rel="stylesheet" href="../public/css/table.css"/>
    <link rel="stylesheet" href="../public/css/botones.css"/>
    <style>
        body{
            margin: 0 auto;
            max-width: 75%;
        }
    </style>
</head>
<body>
    <h3>Noticias</h3>
    <hr/>
    <a href="acciones/noticia/nueva.php" class="btn">Añadir</a>
    <a href="acciones/cerrar_sesion.php" class="btn">Salir</a>
    <hr>

    <table class="tabla tabla-non">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Fecha</th>
            <th>Operaciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($noticias as $noticia):?>
        <tr>
            <td><?php echo $noticia['titulo']?></td>
            <td><?php echo $noticia['fecha']?></td>
            <td>
                <a class="btn" href="acciones/noticia/ver.php?id=<?php echo $noticia['id_noticia']; ?>">Ver noticia</a>
                <a class="btn" href="acciones/noticia/editar.php?id=<?php echo $noticia['id_noticia']; ?>">Editar noticia</a>
                <a class="btn" href="acciones/noticia/eliminar.php?id=<?php echo $noticia['id_noticia']; ?>">Eliminar noticia</a>
            </td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    
</body>
</html>


