<?php
/* @var $this FotoController */
/* @var $model AutoFoto */

$this->breadcrumbs=array(
	'Auto Fotos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);
?>
<h1>Actualizar AutoFoto <?php echo $model->id; ?></h1>
<div class="container">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>