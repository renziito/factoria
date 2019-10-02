<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', [
	'id'=>'clientes-form',
	'enableAjaxValidation'=>false,
    ]); ?>

    <p class="note">Los campos con un <span class="required">*</span> son requeridos.</p>

    <?= $form->errorSummary($model,'<b>Por favor verifique los siguientes errores : </b>'); ?>

            <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'image'); ?>
            <?= $form->textField($model,'image',['class'=>'form-control','size'=>60,'maxlength'=>255]); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'link'); ?>
            <?= $form->textArea($model,'link',array('rows'=>6, 'cols'=>50)); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'created_at'); ?>
            <?= $form->textField($model,'created_at'); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'estado'); ?>
            <?= $form->textField($model,'estado'); ?>
            </div>
        </div>

            <hr>
    <?= CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',['class'=>'btn btn-success']); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->