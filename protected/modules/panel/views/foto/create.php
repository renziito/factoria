<?php
/* @var $this FotoController */
/* @var $model AutoFoto */

$this->breadcrumbs=array(
	'Auto Fotos'=>array('index'),
	'Crear',
);

?>

<h1>Crear AutoFoto</h1>

<div class="container">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>


