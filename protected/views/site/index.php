<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<!-- Section: home -->
<section id="home">
    <div class="container-fluid p-0">
        <!-- Slider Revolution Start -->

        <?php $this->renderPartial('pages/_slider', ['sliders' => $sliders]); ?>
        <!-- end .rev_slider_wrapper -->
        <script>
            $(document).ready(function (e) {
                $(".rev_slider").revolution({
                    sliderType: "standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            style: "metis",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                        }
                    },
                    responsiveLevels: [1240, 1024, 778],
                    visibilityLevels: [1240, 1024, 778],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [650, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        origo: "slidercenter",
                        speed: 1000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                        type: "scroll"
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            });
        </script>
        <!-- Slider Revolution Ends -->
    </div>
</section>



<!-- Section: Services -->
<section id="services">
    <div class="container pb-60">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase mt-0 title line-bottom">
                        Nuestros Servicios
                    </h2>
                </div>
            </div>
            <div class="row column-view">
                <style>
                    .item p {
                        position: absolute;
                        left: 0px;
                        top: 0px;
                        width: 100%;
                        height: 100%;
                        padding: 30px 24px 10px;
                        overflow: auto;
                        color: #ffffff;
                        z-index: 3;
                        background-color: #00b096;
                        opacity: 0;
                        transition: opacity 500ms ease;
                        -webkit-transition: opacity 500ms ease;
                        -ms-transition: opacity 500ms ease;
                        -o-transition: opacity 500ms ease;
                        -moz-transition: opacity 500ms ease;
                    }

                    .item:hover p {
                        opacity: 0.95;
                        -ms-animation-name: flipInX;
                        -moz-animation-name: flipInX;
                        -op-animation-name: flipInX;
                        -webkit-animation-name: flipInX;
                        animation-name: flipInX;
                        -ms-animation-duration: 800ms;
                        -moz-animation-duration: 800ms;
                        -op-animation-duration: 800ms;
                        -webkit-animation-duration: 800ms;
                        animation-duration: 800ms;
                        -ms-animation-timing-function: linear;
                        -moz-animation-timing-function: linear;
                        -op-animation-timing-function: linear;
                        -webkit-animation-timing-function: linear;
                        animation-timing-function: linear;
                        -ms-animation-iteration-count: 1;
                        -moz-animation-iteration-count: 1;
                        -op-animation-iteration-count: 1;
                        -webkit-animation-iteration-count: 1;
                        animation-iteration-count: 1;
                    }
                </style>

                <div class="col-md-12">
                    <div class="owl-carousel-3col" data-dots="true">
                        <?php foreach ($servicios as $servicio): ?>
                            <div class=" item">
                                <div class="thumb">
                                    <img 
                                        src="<?= Yii::app()->getBaseUrl(true) ?>/files/media/servicios/<?= $servicio['image'] ?>"
                                        class="img-fullwidth" alt="">
                                </div>
                                <div class="bg-white p-20">
                                    <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                        <?= $servicio['titulo'] ?>
                                    </h4>
                                    <p><?= $servicio['parrafo'] ?>
                                        <?php if ($servicio->button): ?>
                                            <br><br>
                                            <a class="btn btn-theme-colored btn-sm btn-flat"
                                            <?php
                                            if ($servicio->link == 'modal') {
                                                echo' data-toggle = "modal" data-target = "#BSParentModal"';
                                            }
                                            ?>
                                               href="<?= Yii::app()->createUrl($servicio->link) ?>">
                                                   <?= $servicio->button ?>
                                            </a>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: About -->
<?php $themeUrl = Yii::app()->theme->getBaseUrl() ?>
<section class="bg-lighter" id="us" style="background:url(<?= $themeUrl ?>/bin/images/fondo_nosotros.png);background-size:100% 100%;">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-0 title line-bottom">FACTORÍA PEÑARANDA</h2>
                    <p><?= $nosotros->parrafo ?></p>
                </div>
                <div class="col-md-6">
                    <div class="thumb">
                        <?php if ($nosotros->youtube): ?>
                            <a href="<?= $nosotros->youtube ?>"
                               data-lightbox-gallery="youtube-video" title="Video">
                               <?php endif; ?>
                            <img class="img-fullwidth" 
                                 src="<?= Yii::app()->getBaseUrl() ?>/files/media/nosotros/<?= $nosotros->image ?>"
                                 alt="images">
                                 <?php if ($nosotros->youtube): ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: clientes -->
<?php $pathClientes = Yii::app()->getBaseUrl(true) . '/files/media/clientes/' ?>
<section id="clients" class="text-center">
    <h3 class="mt-30 title">GRACIAS POR SU CONFIANZA : </h3>
    <div class="container" style="padding-top:30px">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="owl-carousel-5col" data-dots="false">
                        <?php foreach ($clientes as $cliente) : ?>
                            <?php if ($cliente['link']) : ?>
                                <a target="_blank" href="<?= $cliente['link'] ?>">
                                <?php endif; ?>
                                <div class=" item">
                                    <div class="thumb">
                                        <img src="<?= Utils::isUrlValid($cliente['image'], $pathClientes) ?>" 
                                             class="img-responsive" alt="">
                                    </div>
                                </div>
                                <?php if ($cliente['link']) : ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: venta de autos -->
<?php $pathAutos = Yii::app()->getBaseUrl(true) . '/files/media/autos/' ?>
<section class="bg-dark bg-dark-transparent-6 text-white" style="background:url(<?= $themeUrl ?>/bin/images/fondo_venta-autos.png);background-size:100% 100%;">
    <div class="container-fluid p-50" style="padding-top:30px">
        <h3 class=" text-white mt-0 title line-bottom">VENTA DE AUTOS </h3>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel-3col" data-dots="true">
                        <?php foreach ($autos as $auto) : ?>
                            <div class=" item p-50">
                                <div class="thumb">
                                    <?php
                                    $foto = AutoFoto::model()->find('auto_id = ' . $auto['id'] . ' AND estado = TRUE AND destacado = TRUE');
                                    if ($foto):
                                        ?>
                                        <img src="<?= $pathAutos . $foto->image ?>" class="img-responsive" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="bg-white p-20">
                                    <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                        <?= $auto['marca'] ?>-<?= $auto['modelo'] ?>
                                    </h4>
                                    <ul class="text-black">
                                        <ol>Marca : <?= $auto['marca'] ?></ol>
                                        <ol>Modelo : <?= $auto['modelo'] ?></ol>
                                        <ol>Año : <?= $auto['anio'] ?></ol>
                                        <ol> <?= $auto['kilometraje'] ?> Kilometros</ol>
                                        <ol>Color: <?= $auto['color'] ?></ol>
                                    </ul>
                                    <br>
                                    <?php if ($auto['mensaje']): ?>
                                        <a class="btn btn-theme-colored btn-sm btn-flat btn-interesa" 
                                           data-text="<?= $auto['mensaje'] ?>"
                                           href="#">Me Interesa</a>
                                       <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?= Yii::app()->createUrl('autos') ?>" class="btn btn-block btn-lg p-20 btn-theme-colored">
                        VER TODOS LOS AUTOS EN VENTA
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: marcas -->
<?php $pathMarca = Yii::app()->getBaseUrl(true) . '/files/media/marcas/' ?>
<section class="text-center">
    <div class="container" style="padding-top:30px">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel-5col" data-dots="false">
                        <?php foreach ($marcas as $marca) : ?>
                            <div class=" item">
                                <div class="thumb">
                                    <img src="<?= Utils::isUrlValid($marca['image'], $pathMarca) ?>" 
                                         class="img-responsive" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
