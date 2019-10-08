<?php
/* @var $this AutoController */
/* @var $model Auto */

$this->breadcrumbs = array(
    'Autos' => array('index'),
    'Administrar',
);
?>

<h1>
    Administrador de Autos    <a class="pull-right btn btn-success" href="<?= $this->createUrl("create") ?>">Nuevo</a>
</h1>

<div class="table-responsive">
    <?php
    $this->widget('zii.widgets.grid.CGridView', [
        'id'           => 'auto-grid',
        'dataProvider' => $model->search(),
        'filter'       => $model,
        'columns'      => [
            'id',
            'marca',
            'modelo',
            'kilometraje',
            'color',
            'precio',
            [
                'class'       => 'CButtonColumn',
                'template'    => '{comment}{actualiza}{borrar}',
                'htmlOptions' => array('width' => 100, 'style' => 'text-align:center'),
                'buttons'     => [
                    'actualiza' => [
                        'label'   => '<i class="fa fa-edit fa-2x" style="margin-right:10px"></i>',
                        'url'     => 'Yii::app()->controller->createUrl("update", ["id"=>$data->id])',
                        'options' => array('title' => 'Actualizar', 'data-toggle' => 'tooltip'),
                    ],
                    'comment'   => array(
                        'label'   => '<i class="fa fa-images fa-2x" style="margin-right:10px"></i>',
                        'url'     => 'Yii::app()->createUrl("/panel/foto/index", array("id"=>$data->id))',
                        'options' => array('title' => 'Fotos', 'data-toggle' => 'tooltip'),
                    ),
                    'borrar'    => [
                        'label'   => '<i class="fa fa-trash fa-2x" style="margin-right:10px"></i>',
                        'url'     => 'Yii::app()->controller->createUrl("delete", ["id"=>$data->id])',
                        'options' => array('title' => 'Eliminar', 'data-toggle' => 'tooltip'),
                        'click'   => 'function(){ var conf = confirm("Eliminar?"); if(conf==false)return false;}',
                    ]
                ],
            ],
        ],
    ]);
    ?>
</div>
