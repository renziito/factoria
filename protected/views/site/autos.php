<div class="container">
    <br>
    <h2 class="text-center title title-interno line-bottom">VENTA DE AUTOS</h2>
    <?php $url = Yii::app()->getBaseUrl(true) . '/files/media/autos/'; ?>
    <?php foreach ($autos as $auto) : ?>
        <?php $images = AutoFoto::model()->findAll('estado = TRUE AND auto_id=' . $auto->id); ?>
        <br>
        <div class="row m-t-30 p-30 border-1px">
            <div class="col-md-5">
                <div class="owl-carousel-1col" data-dots="true">
                    <?php foreach ($images as $image): ?>
                        <img src="<?= $url . $image->image ?>" class="img-responsive"/>
                    <?php endforeach; ?>
                </div>
                <div class="clearfix"></div>
                <h4 class="text-center"> <?= $auto->marca ?>-<?= $auto['modelo'] ?></h4>
            </div>
            <div class="col-md-7">
                <?= $auto->descripcion ?>
                <div class="clearfix"></div>
                <ul class="text-black">
                    <ol>Marca : <?= $auto['marca'] ?></ol>
                    <ol>Modelo : <?= $auto['modelo'] ?></ol>
                    <ol>Año : <?php //$auto['anio']                   ?></ol>
                    <ol> <?= $auto['kilometraje'] ?> Kilometros</ol>
                    <ol>Color: <?= $auto['color'] ?></ol>
                </ul>
                <br>
            </div>
        </div>
    <?php endforeach; ?>
</div>