<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	'Crear',
);

?>

<h1>Crear Slider</h1>

<div class="container">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>


