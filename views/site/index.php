<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'Proyectoweb';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="site-index">
        <div class="">
            <!-- Tabla -->
            <div class="row">
                <div class="col-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Año</th>
                                <th scope="col">Género</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Born to Die</td>
                                <td>2012</td>
                                <td>Indie Pop</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ultraviolence</td>
                                <td>2014</td>
                                <td>Alternative Rock</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Honeymoon</td>
                                <td>2015</td>
                                <td>Art Pop</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Lust for Life</td>
                                <td>2017</td>
                                <td>Indie Pop</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Norman Fucking Rockwell!</td>
                                <td>2019</td>
                                <td>Alternative Pop</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TMzU0kY4gyI" frameborder="0" allowfullscreen></iframe>


                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="col-6">
                    <iframe src="src/prueba.pdf " frameborder="0" height="100%" width="100%"></iframe>


                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-9"> <audio controls>
                                <audio controls>
                                    <source src="src/cancion.mp3" type="audio/mpeg">
                                </audio>

                        </div>
                        <div class="col-6 ">
                            <figure class="figure w-100">
                                <!-- <img src="src/img.png" class="figure-img img-fluid rounded " alt="..."> -->
                                <?=
                                Html::img('@web/src/img.png', ['class' => 'figure-img img-fluid rounded', 'alt' => '...'])
                                ?>


                            </figure>
                        </div>
                        <div class="col-6 ">
                            <figure class="figure w-100">
                                <?=
                                Html::img('@web/src/img.png', ['class' => 'figure-img img-fluid rounded', 'alt' => '...'])
                                ?>


                            </figure>
                        </div>

                        <!-- Force next columns to break to new line -->
                        <div class="w-100"></div>

                        <div class="col-6 ">
                            <figure class="figure w-100">
                                <?=
                                Html::img('@web/src/img.png', ['class' => 'figure-img img-fluid rounded', 'alt' => '...'])
                                ?>


                            </figure>
                        </div>
                        <div class="col-6 ">
                            <figure class="figure w-100">
                                <?=
                                Html::img('@web/src/img.png', ['class' => 'figure-img img-fluid rounded', 'alt' => '...'])
                                ?>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1>Capitales de México</h1>
            <ul class="list-group">
                <li class="list-group-item">Aguascalientes</li>
                <li class="list-group-item">Chihuahua</li>
                <li class="list-group-item">Ciudad de México</li>
                <li class="list-group-item">Durango</li>
                <li class="list-group-item">Guanajuato</li>
                <li class="list-group-item">Hermosillo</li>
                <li class="list-group-item">Mérida</li>
                <li class="list-group-item">Monterrey</li>
                <li class="list-group-item">Morelia</li>
                <li class="list-group-item">Oaxaca de Juárez</li>
                <li class="list-group-item">Puebla</li>
                <li class="list-group-item">Querétaro</li>
                <li class="list-group-item">San Luis Potosí</li>
                <li class="list-group-item">Tepic</li>
                <li class="list-group-item">Tlaxcala</li>
                <li class="list-group-item">Toluca</li>
                <li class="list-group-item">Villahermosa</li>
                <li class="list-group-item">Xalapa</li>
                <li class="list-group-item">Zacatecas</li>
            </ul>
        </div>

    </div>


</div>