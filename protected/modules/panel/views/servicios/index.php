<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs = array(
    'Servicios' => array('index'),
    'Administrar',
);
?>

<h1>
    Administrador de Servicios
    <a class="pull-right btn btn-success" href="<?= $this->createUrl("create") ?>">Nuevo</a>
</h1>

<div class="table-responsive">
    <?php
    $this->widget('zii.widgets.grid.CGridView', [
        'id'           => 'servicios-grid',
        'dataProvider' => $model->search(),
        'filter'       => $model,
        'columns'      => [
            'id',
            [
                'name'        => 'image',
                'htmlOptions' => array('style' => 'text-align:center'),
                'value'       => function ($data) {
                    if ($data->image) {
                        echo '<img width="80px" src="' . Yii::app()->getBaseUrl(true) . '/files/media/servicios/' . $data->image . '" />';
                    }
                }
            ],
            'titulo',
            'parrafo',
            [
                'class'       => 'CButtonColumn',
                'template'    => '{actualiza}{borrar}',
                'htmlOptions' => array('width' => 100, 'style' => 'text-align:center'),
                'buttons'     => [
                    'actualiza' => [
                        'label'   => '<i class="fa fa-edit fa-2x" style="margin-right:10px"></i>',
                        'url'     => 'Yii::app()->controller->createUrl("update", ["id"=>$data->id])',
                        'options' => array('title' => 'Actualizar', 'data-toggle' => 'tooltip'),
                    ],
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
