<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs = array(
    'Sliders' => array('index'),
    'Administrar',
);
?>

<h1>
    Administrador de Sliders <a class="pull-right btn btn-success" href="<?= $this->createUrl("create") ?>">Nuevo</a>
</h1>

<div class="table-responsive">
    <?php $this->widget('zii.widgets.grid.CGridView', [
        'id' => 'slider-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => [
            'id',
            [
                'name'        => 'image',
                'htmlOptions' => array('style' => 'text-align:center'),
                'value'       => function ($data) {
                    if ($data->image) {
                        echo '<img width="80px" src="' . Yii::app()->getBaseUrl(true) . '/files/media/sliders/' . $data->image . '" />';
                    }
                }
            ],
            'title',
            'button',
            'position',
            'link',
            [
                'class' => 'CButtonColumn',
                'template'           => '{update}{delete}',
                'deleteConfirmation' => "js:'Se va a eliminar el evento : '+$(this).parent().parent().children(':nth-child(2)').text()+'?'",
            ],
        ],
    ]); ?>
</div>