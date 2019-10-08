<?php
/* @var $this FotoController */
/* @var $model AutoFoto */

$this->breadcrumbs=array(
	'Auto Fotos'=>array('index'),
	'Administrar',
);
?>

<h1>
    Administrador de Auto Fotos    <a class="pull-right btn btn-success" href="<?= $this->createUrl("create")?>">Nuevo</a>
</h1>

<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', [
	'id'=>'auto-foto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>[
		'id',
		'auto_id',
		'image',
		'destacado',
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
