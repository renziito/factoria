<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Crear',
);

?>

<h1>Crear Clientes</h1>

<div class="container">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>


