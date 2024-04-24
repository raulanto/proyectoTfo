<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appmat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->widget(Select2::classname(), [
        'data' => [
            'h' => 'Hombre',
            'm' => 'Mujer',
        ],
        'options' => ['placeholder' => 'Selecciona tu género'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>


    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>



    <?php
    echo '<label class="form-label">fecha de cumpleaños</label>';
    echo DatePicker::widget([
        'name' => 'fecha',
        'type' => DatePicker::TYPE_COMPONENT_PREPEND,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>