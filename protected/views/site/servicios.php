<div class="container">
    <br>
    <h2 class="text-center title title-interno line-bottom">SERVICIOS</h2>
    <?php foreach ($servicios as $servicio) : ?>
        <br>
        <div class="row m-t-30 p-30 border-1px">
            <div class="col-md-5">
                <?php $url = Yii::app()->getBaseUrl(true) . '/files/media/servicios/'; ?>
                <img src="<?= $url . $servicio->image ?>" class="img-responsive"/>
                <div class="clearfix"></div>
                <h4 class="text-center"> <?= $servicio->titulo ?></h4>
            </div>
            <div class="col-md-7">
                <?= $servicio->parrafo ?>
                <div class="clearfix"></div>
                <?php if ($servicio->link): ?>
                    <a class="btn btn-md btn-info pull-right"
                       href="<?= $servicio->link ?>" target="_blank">
                           <?= $servicio->button ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>