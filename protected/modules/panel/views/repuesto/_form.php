<?php
/* @var $this RepuestoController */
/* @var $model Repuesto */
/* @var $form CActiveForm */
$route = Yii::app()->getBaseUrl(true) . '/files/media/repuestos/';
?>

<div class="form">

    <?php
    $form  = $this->beginWidget('CActiveForm', [
        'id'                   => 'repuesto-form',
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
        <div class="col-xs-7">
            <?= $form->labelEx($model, 'titulo'); ?>
            <?= $form->textField($model, 'titulo', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
        </div>
        <div class="col-xs-2">
            <?= $form->labelEx($model, 'precio'); ?>
            <?= $form->textField($model, 'precio', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3">
            <?= $form->labelEx($model, 'modelo'); ?>
            <?= $form->textField($model, 'modelo', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
        </div>
        <div class="col-xs-3">
            <?= $form->labelEx($model, 'codigo'); ?>
            <?= $form->textField($model, 'codigo', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
        </div>
        <div class="col-xs-3">
            <?= $form->labelEx($model, 'image'); ?>
            <?= $form->fileField($model, 'image', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
        </div>
    </div>

    <hr>
    <?= CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', ['class' => 'btn btn-success']); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->