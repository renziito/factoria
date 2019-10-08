<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs = array(
    'Marcas' => [$this->createUrl('index')],
    $model->id,
);
?>
<h1>Actualizar Marcas <?php echo $model->id; ?></h1>
<div class="container">
    <?php $this->renderPartial('_form', array('model' => $model)); ?></div>