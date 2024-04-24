<?php

use yii\bootstrap5\Html;

?>


<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-12">
            <div class="nav-inner">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <!-- <img src="assets/images/logo.svg" alt="Logo"> -->
                        <?=
                        Html::img('@web/logo.svg', ['class' => 'figure-img img-fluid rounded w-10', 'height' => '50px', 'alt' => '...'])
                        ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="page-scroll active" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="about-us.html">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="javascript:void(0)">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="javascript:void(0)">Portafolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Páginas</a>
                                <ul class="sub-menu collapse" id="submenu-1-1">
                                    <li class="nav-item"><a href="about-us.html">Nosotros</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="javascript:void(0)">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="javascript:void(0)">Contacto</a>
                            </li>
                        </ul>
                    </div> <!-- colapso de la barra de navegación -->
                    <div class="button">
                        <a href="javascript:void(0)" class="btn white-bg mouse-dir">Obtener cotización <span class="dir-part"></span></a>
                    </div>
                </nav> <!-- barra de navegación -->
            </div>
        </div>
    </div> <!-- fila -->
</div> <!-- contenedor -->