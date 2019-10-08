<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs = array(
    'Marcas' => array('index'),
    'Administrar',
);
?>

<h1>
    Administrador de Marcas  
    <a class="pull-right btn btn-success" href="<?= $this->createUrl("create") ?>">Nuevo</a>
</h1>

<div class="table-responsive">
    <?php
    $this->widget('zii.widgets.grid.CGridView', [
        'id'           => 'marcas-grid',
        'dataProvider' => $model->search(),
        'filter'       => $model,
        'columns'      => [
            'id',
            'image',
            [
                'class'              => 'CButtonColumn',
                'template'           => '{update}{delete}',
                'deleteConfirmation' => "js:'Se va a eliminar el evento : '+$(this).parent().parent().children(':nth-child(2)').text()+'?'",
            ],
        ],
    ]);
    ?>
</div>
