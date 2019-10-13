<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */

$route = Yii::app()->getBaseUrl(true) . '/files/media/servicios/';
?>

<div class="form">

    <?php
    $form  = $this->beginWidget('CActiveForm', [
        'id'                   => 'servicios-form',
        'enableAjaxValidation' => false,
        'htmlOptions'          => [
            "enctype" => "multipart/form-data"
        ]
    ]);
    ?>

    <?php if ($model->image) : ?>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <img class="img-responsive" src="<?= $route ?><?= $model->image ?>" />
            </div>
        </div>
    <?php endif; ?>

    <p class="note">Los campos con un <span class="required">*</span> son requeridos.</p>

    <?= $form->errorSummary($model, '<b>Por favor verifique los siguientes errores : </b>'); ?>

    <div class="row">
        <div class="col-xs-9">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'image'); ?>
                <?= $form->fileField($model, 'image', ['class' => 'form-control']); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'titulo'); ?>
                <?= $form->textField($model, 'titulo', array('class' => 'form-control')); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'parrafo', ['label' => 'Texto de Descripcion']); ?><br>
                <?= $form->textArea($model, 'parrafo', array('class' => 'form-control')); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'button', ['label' => 'Texto del Boton']); ?><br>
                <?= $form->textArea($model, 'button', array('class' => 'form-control')); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'link'); ?><br>
                <?= $form->textArea($model, 'link', array('class' => 'form-control')); ?>
            </div>
        </div>
    </div>


    <hr>
    <?= CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', ['class' => 'btn btn-success']); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->