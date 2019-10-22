<?php
/* @var $this RepuestoController */
/* @var $model Repuesto */

$this->breadcrumbs=array(
	'Repuestos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);
?>
<h1>Actualizar Repuesto <?php echo $model->id; ?></h1>
<div class="container">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>