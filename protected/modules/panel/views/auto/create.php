<?php
/* @var $this AutoController */
/* @var $model Auto */

$this->breadcrumbs=array(
	'Autos'=>array('index'),
	'Crear',
);

?>

<h1>Crear Auto</h1>

<div class="container">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>


