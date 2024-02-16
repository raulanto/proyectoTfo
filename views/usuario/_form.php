<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\assets\AppAsset;
/** @var yii\web\View $this */
/** @var app\models\Usuario $model */
/** @var yii\widgets\ActiveForm $form */


AppAsset::register($this);
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appmat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->dropDownList([
        'h' => 'Hombre',
        'm' => 'Mujer',
    ], ['prompt' => 'Selecciona tu género']) ?>


    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>