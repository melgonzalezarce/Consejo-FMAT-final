<?php
/**
 * Created by PhpStorm.
 * User: Melissa
 * Date: 31/05/2015
 * Time: 06:34 PM
 */

?>

<div class="sidebar">
    <div class="container sidebar-sticky">
        <div class="sidebar-about">
            <img src="public/img/CE_MATE.png" alt="">
            <h2>
                Consejo FMAT
            </h2>
            <a href="admin/login.php" style="color: cornflowerblue">Iniciar sesión</a><br/>
            <a href="index.php">Todas las noticias</a>
            <p class="lead">Sitio de Noticias</p>
        </div>

        <nav class="sidebar-nav">
            <?php foreach($noticias as $noti):?>
                <a class="sidebar-nav-item" href="ver_noticia.php?id=<?php echo $noti['id_noticia']; ?>"><?php echo $noti['titulo']?></a>
            <?php endforeach ?>
        </nav>

        <p>&copy; 2015. All rights reserved.</p>
    </div>
</div>