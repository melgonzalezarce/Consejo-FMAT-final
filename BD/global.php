<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 01:02 PM
 */


define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB_NAME', 'consejo_fmat');

function ejecutar_query($query)
{
    $con = mysqli_connect(SERVER, USER, PASSWORD, DB_NAME) or die ("Error " . mysqli_error($con));
    return mysqli_query($con, $query);
}