<?php
/* @var $this AutoController */
/* @var $model Auto */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', [
	'id'=>'auto-form',
	'enableAjaxValidation'=>false,
    ]); ?>

    <p class="note">Los campos con un <span class="required">*</span> son requeridos.</p>

    <?= $form->errorSummary($model,'<b>Por favor verifique los siguientes errores : </b>'); ?>

            <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'marca'); ?>
            <?= $form->textField($model,'marca',['class'=>'form-control','size'=>60,'maxlength'=>255]); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'modelo'); ?>
            <?= $form->textField($model,'modelo',['class'=>'form-control','size'=>60,'maxlength'=>255]); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'kilometraje'); ?>
            <?= $form->textField($model,'kilometraje',['class'=>'form-control','size'=>60,'maxlength'=>255]); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'color'); ?>
            <?= $form->textField($model,'color',['class'=>'form-control','size'=>60,'maxlength'=>255]); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'precio'); ?>
            <?= $form->textField($model,'precio',['class'=>'form-control','size'=>60,'maxlength'=>255]); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'descripcion'); ?>
            <?= $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
            </div>
        </div>

                <div class="row">
            <div class="col-xs-9">
            <?= $form->labelEx($model,'destacado'); ?>
            <?= $form->textField($model,'destacado'); ?>
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