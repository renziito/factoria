<?php
/* @var $this SliderController */
/* @var $model Slider */
/* @var $form CActiveForm */

$route = Yii::app()->getBaseUrl(true) .'/files/media/sliders/';
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', [
        'id' => 'slider-form',
        'enableAjaxValidation' => false,
        'htmlOptions'          => [
            "enctype" => "multipart/form-data"
        ]
    ]); ?>

    <?php if ($model->image) : ?>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <img class="img-responsive"
                 src="<?= $route  ?><?= $model->image ?>" />
            </div>
        </div>
    <?php endif; ?>

    <p class="note">Los campos con un <span class="required">*</span> son requeridos.</p>

    <?= $form->errorSummary($model, '<b>Por favor verifique los siguientes errores : </b>'); ?>

    <div class="row">
        <div class="col-xs-9">
            <?= $form->labelEx($model, 'image'); ?>
            <?= $form->fileField($model, 'image', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9">
            <?= $form->labelEx($model, 'title', ['label' => 'Título']); ?>
            <?= $form->textField($model, 'title', array('class' => 'form-control')); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9">
            <?= $form->labelEx($model, 'button', ['label' => 'Texto en Boton']); ?>
            <?= $form->textField($model, 'button', [
                'class' => 'form-control',
                'size' => 60, 'maxlength' => 255
            ]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9">
            <?= $form->labelEx($model, 'position', ['label' => 'Posición']); ?>
            <?= $form->dropDownList(
                $model,
                'position',
                [
                    'right' => 'Derecha', 'center' => 'Centro', 'left' => 'Izquierda'
                ],
                ['class' => 'form-control']
            ); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9">
            <?= $form->labelEx($model, 'link'); ?>
            <?= $form->textField($model, 'link', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
        </div>
    </div>

    <hr>
    <?= CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', ['class' => 'btn btn-success']); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->