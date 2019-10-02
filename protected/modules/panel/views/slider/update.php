<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
    'Sliders'=> [$this->createUrl('index')],
    $model->title,
);

?>
<h1>Actualizar Slider <?php echo $model->id; ?></h1>
<div class="container">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>