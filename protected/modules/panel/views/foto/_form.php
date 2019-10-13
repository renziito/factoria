<?php
/* @var $this FotoController */
/* @var $model AutoFoto */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', [
        'id'                   => 'auto-foto-form',
        'enableAjaxValidation' => false,
        'htmlOptions'          => [
            "enctype" => "multipart/form-data"
        ]
    ]);
    ?>

    <p class="note">Los campos con un <span class="required">*</span> son requeridos.</p>

    <?= $form->errorSummary($model, '<b>Por favor verifique los siguientes errores : </b>'); ?>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'image'); ?>
                <?= $form->fileField($model, 'image', ['class' => 'form-control']); ?>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group form-group-default required">
                <?= $form->labelEx($model, 'destacado'); ?>
                <?= $form->checkBox($model, 'destacado', ['class' => 'switchery']); ?>
            </div>
        </div>
    </div>

    <hr>
    <?= CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', ['class' => 'btn btn-success']); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->

<script>
    $(document).ready(function () {
        var elem = document.querySelector('.switchery');
        var init = new Switchery(elem);
    });
</script>