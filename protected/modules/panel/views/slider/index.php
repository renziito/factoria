<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	'Administrar',
);
?>

<h1>
    Administrador de Sliders    <a class="pull-right btn btn-success" href="<?= $this->createUrl("create")?>">Nuevo</a>
</h1>

<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', [
	'id'=>'slider-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>[
		'id',
		'image',
		'title',
		'button',
		'position',
		'link',
		/*
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
