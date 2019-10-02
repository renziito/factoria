<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs = array(
    'Servicios' => array('index'),
    $model->id  => array('view', 'id' => $model->id),
    'Actualizar',
);
?>
<h1>Actualizar Servicios <?php echo $model->id; ?></h1>
<div class="container">
    <?php $this->renderPartial('_form', array('model' => $model)); ?></div>