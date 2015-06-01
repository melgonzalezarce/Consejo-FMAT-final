<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/13/15
 * Time: 8:43 AM
 */

//incluye el dao con la información de la BD:
include '../../../BD/global.php';

$id_noticia = $_GET['id'];

$sentencia_sql = "DELETE FROM noticias WHERE id_noticia=$id_noticia";
ejecutar_query($sentencia_sql);

header('location: ../../noticias.php');