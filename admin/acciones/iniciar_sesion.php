<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/13/15
 * Time: 8:34 AM
 */

//incluye el dao con la información de la BD:
include '../../BD/global.php';

session_start();

$nick_user = $_POST["usuario"];
$password_user = $_POST["password"];

$sentencia_sql = "SELECT * FROM usuarios where nombre_usuario='$nick_user' AND contrasena='$password_user'";

$usuario = ejecutar_query($sentencia_sql);


if ($usuario->num_rows > 0) {
    $row = $usuario->fetch_assoc();

    //seteamos las variables de sesión:
    $_SESSION["id_user"] = $row["id_usuario"];
    $_SESSION["nombre_usuario"] = $row["nombre_usuario"];

    //Redirigimos a index:
    header('location: ../index.php');
} else {
    header("Location: ../login.php?nf");
}





