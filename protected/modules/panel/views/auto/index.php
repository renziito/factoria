<?php
/* @var $this AutoController */
/* @var $model Auto */

$this->breadcrumbs=array(
	'Autos'=>array('index'),
	'Administrar',
);
?>

<h1>
    Administrador de Autos    <a class="pull-right btn btn-success" href="<?= $this->createUrl("create")?>">Nuevo</a>
</h1>

<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', [
	'id'=>'auto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>[
		'id',
		'marca',
		'modelo',
		'kilometraje',
		'color',
		'precio',
		/*
		'descripcion',
		'destacado',
		'created_at',
		'estado',
		*/
		[
			'class'=>'CButtonColumn',
                        'template'           => '{update}{delete}',
                        'deleteConfirmation' => "js:'Se va a eliminar el evento : '+$(this).parent().parent().children(':nth-child(2)').text()+'?'",
		],
	],
]); ?>
</div>
