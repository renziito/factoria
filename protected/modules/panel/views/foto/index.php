<?php
/* @var $this FotoController */
/* @var $model AutoFoto */

$this->breadcrumbs = array(
    'Auto Fotos' => array('index'),
    'Administrar',
);

$auto = Auto::model()->findbyPk($model->auto_id);
?>

<h1>
    Administrador de Fotos del <?= $auto->marca ?> - <?= $auto->modelo ?>
    <a class="pull-right btn btn-success" href="<?= $this->createUrl("create", ['id' => $model->auto_id]) ?>">Nuevo</a>
</h1>

<div class="table-responsive">
    <?php
    $this->widget('zii.widgets.grid.CGridView', [
        'id'           => 'auto-foto-grid',
        'dataProvider' => $model->search(),
        'filter'       => $model,
        'columns'      => [
            'id',
            [
                'name'        => 'image',
                'htmlOptions' => array('style' => 'text-align:center'),
                'value'       => function ($data) {
                    if ($data->image) {
                        echo '<img width="80px" src="' . Yii::app()->getBaseUrl(true) . '/files/media/autos/' . $data->image . '" />';
                    }
                }
            ],
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
