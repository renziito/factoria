<?php
/* @var $this RepuestoController */
/* @var $model Repuesto */

$this->breadcrumbs=array(
	'Repuestos'=>array('index'),
	'Crear',
);

?>

<h1>Crear Repuesto</h1>

<div class="container">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>


