<?php
/* @var $this DefaultController */

$this->breadcrumbs = array(
    $this->module->id,
);

$route = Yii::app()->getBaseUrl(true) . '/files/media/nosotros/';
?>
<h1>Nosotros</h1>

<div class="container">
    <div class="form">

        <?php
        $form  = $this->beginWidget('CActiveForm', [
            'id'                   => 'auto-form',
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
                    <?= $form->fileField($model, 'image', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-9">
                <div class="form-group form-group-default required">
                    <?= $form->labelEx($model, 'parrafo'); ?>
                    <?= $form->textArea($model, 'parrafo', ['class' => 'form-control', 'rows' => 6]); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-9">
                <div class="form-group form-group-default">
                    <?= $form->labelEx($model, 'youtube'); ?>
                    <?= $form->textField($model, 'youtube', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
                </div>
            </div>
        </div>

        <hr>
        <?= CHtml::submitButton('Guardar', ['class' => 'btn btn-success']); ?>

        <?php $this->endWidget(); ?>
    </div>
</div>