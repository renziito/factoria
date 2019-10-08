<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs = array(
    'Servicios' => [$this->createUrl('index')],
    $model->titulo,
);
?>
<h1>Actualizar Servicios <?php echo $model->id; ?></h1>
<div class="container">
    <?php $this->renderPartial('_form', array('model' => $model)); ?></div>