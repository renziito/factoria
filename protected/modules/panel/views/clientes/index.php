<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Administrar',
);
?>

<h1>
    Administrador de Clientes    <a class="pull-right btn btn-success" href="<?= $this->createUrl("create")?>">Nuevo</a>
</h1>

<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', [
	'id'=>'clientes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>[
		'id',
		'image',
		'link',
		'created_at',
		'estado',
		[
			'class'=>'CButtonColumn',
                        'template'           => '{update}{delete}',
                        'deleteConfirmation' => "js:'Se va a eliminar el evento : '+$(this).parent().parent().children(':nth-child(2)').text()+'?'",
		],
	],
]); ?>
</div>
