<?php
/* @var $this AutoController */
/* @var $model Auto */
/* @var $form CActiveForm */

$from    = "test@hostinger-tutorials.com";
$to      = "sepia.aki@gmail.com";
$subject = "Checking PHP mail";
$message = "PHP mail works just fine";
$headers = "From:" . $from;
// mail($to, $subject, $message, $headers);
?>

<div class="form">

    <?php
    $form    = $this->beginWidget('CActiveForm', [
        'id'                   => 'auto-form',
        'enableAjaxValidation' => false,
        'htmlOptions'          => [
            "enctype" => "multipart/form-data"
        ]
    ]);
    ?>

    <p class="note">Los campos con un <span class="required">*</span> son requeridos.</p>

    <?= $form->errorSummary($model, '<b>Por favor verifique los siguientes errores : </b>'); ?>

    <div class="row">
        <div class="col-xs-5">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'marca'); ?>
                <?= $form->textField($model, 'marca', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
            </div>
        </div>
        <div class="col-xs-5">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'modelo'); ?>
                <?= $form->textField($model, 'modelo', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'kilometraje'); ?>
                <?= $form->numberField($model, 'kilometraje', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'color'); ?>
                <?= $form->textField($model, 'color', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'precio'); ?>
                <?= $form->textField($model, 'precio', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'anio'); ?>
                <?= $form->numberField($model, 'anio', ['class' => 'form-control', 'size' => 60, 'maxlength' => 255]); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'descripcion'); ?>
                <?= $form->textArea($model, 'descripcion', array('rows' => 6, 'cols' => 50)); ?>
            </div>
        </div>
    </div>

    <hr>
    <?= CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', ['class' => 'btn btn-success']); ?>

    <?php $this->endWidget(); ?>

    <script>
        $(document).ready(function () {
            var elem = document.querySelector('.switchery');
            var init = new Switchery(elem);
        });
    </script>

</div><!-- form -->