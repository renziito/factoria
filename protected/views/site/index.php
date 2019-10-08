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
        <div class="section-title">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-uppercase mb-0"></p>
                    <div class="title-icon">
                        <i class="flaticon-carrepair-tool-6 font-45"></i>
                    </div>

                    <h2 class="text-uppercase mt-0 title line-bottom">
                        Nuestros Servicios
                    </h2>
                </div>
            </div>
        </div>
        <div class="section-content">
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
                        opacity: 0.7;
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
                                        src="<?= Yii::app()->getBaseUrl(true) ?>/files/media/clientes/<?= $servicio['image'] ?>"
                                        class="img-fullwidth" alt="">
                                </div>
                                <div class="bg-white p-20">
                                    <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                        <?= $servicio['titulo'] ?>
                                    </h4>
                                    <p><?= $servicio['parrafo'] ?></p>
                                    <!--<a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>-->
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class=" item">
                            <div class="thumb">
                                <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/1.jpg" class="img-fullwidth" alt="">
                            </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                    Scaneo y diagnóstico computarizado
                                </h4>
                                <p>
                                    Nuestro servicio de scaneo a domicilio es la forma más efectiva y
                                    transparente para saber con precisión el estado de tu vehículo y
                                    diagnosticar de modo claro cual es el inconveniente que podría presentar,
                                    para atenderlo de inmediato.</p>
                                <!--<a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/2.jpg" class="img-fullwidth" alt="">
                            </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                    Importación y venta directa de repuestos
                                </h4>
                                <p>
                                    Apóyate en nosotros y consigue repuestos compatibles
                                    con tu vehículo sin gastar de más ni esperar una eternidad.
                                    Si tu presupuesto es corto, tenemos opciones de segunda mano para tu auto
                                </p>
                                <!--<a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/3.jpg" class="img-fullwidth" alt="">
                            </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                    Venta de Autos a consignación
                                </h4>
                                <p>
                                    Evita un proceso largo y tedioso: Te ayudamos a comprar el auto ideal para ti,
                                    o deshacerte de tu automóvil actual al precio justo y realizando los arreglos
                                    necesarios para evitar futuros reclamos.
                                </p>
                                <!--<a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>-->
                            </div>
                        </div>
                        <div class=" item">
                            <div class="thumb">
                                <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/4.jpg" class="img-fullwidth" alt="">
                            </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                    Asesoramiento para compra vehicular
                                </h4>
                                <p>
                                    Puedes tener muchas dudas y preguntas antes de adquirir el
                                    auto ideal para ti... por eso te ayudamos a resolverlas para
                                    que puedas tomar una elección de la que no te arrepientas.
                                </p>
                                <!--<a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/5.jpg" class="img-fullwidth" alt="">
                            </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                    Restauración de vehículos
                                </h4>
                                <p>
                                    Pon tu auto a tono, bien sea para revenderlo, o
                                    para que luzca mejor que nunca. Te ayudamos a dejar
                                    tu auto como recién salido de la fábrica.
                                </p>
                                <!--<a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: About -->
<section class="bg-lighter" id="us">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-0 title line-bottom">FACTORÍA PEÑARANDA</h2>
                    <p>
                        Para muchas personas resulta difícil confiar en un mecánico y
                        tener plena seguridad que lo que le sugieren es lo correcto para
                        su automóvil. Elegir a Factoría Peñaranda es elegir a un socio de
                        confianza que comprende tus necesidades. Tenemos una experiencia
                        conjunta de 30 años y una extensa trayectoria a nivel nacional.
                        Por eso estamos seguros de poder ayudarte en todo lo que necesites
                        tú y tu automóvil.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="thumb">
                        <a href="https://www.youtube.com/watch?v=kcIuVJiYauA" data-lightbox-gallery="youtube-video" title="Video">
                            <img class="img-fullwidth" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/about/8.jpg" alt="images">
                        </a>
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
                <div class="col-md-12">
                    <div class="owl-carousel-8col" data-dots="true">
                        <?php foreach ($clientes as $cliente) : ?>
                            <?php if ($cliente['link']) : ?>
                                <a target="_blank" href="<?= $cliente['link'] ?>">
                                <?php endif; ?>
                                <div class=" item">
                                    <div class="thumb">
                                        <img src="<?= Utils::isUrlValid($cliente['image'], $pathClientes) ?>" 
                                             style="height: 100px;width: 150px" class="img-responsive" alt="">
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
<section class="bg-dark bg-dark-transparent-6 text-white">
    <div class="container-fluid p-50" style="padding-top:30px">
        <h3 class=" text-white mt-0 title line-bottom">VENTA DE AUTOS </h3>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel-3col" data-dots="true">
                        <?php foreach ($autos as $auto) : ?>
                            <div class=" item p-50">
                                <div class="thumb">
                                    <img src="<?= $auto['image'] ?>" style="height: 350px;width: 100%" class="img-responsive" alt="">
                                </div>
                                <div class="bg-white p-20">
                                    <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">
                                        <?= $auto['titulo'] ?>
                                    </h4>
                                    <ul class="text-black">
                                        <ol>Año : <?= $auto['anio'] ?></ol>
                                        <ol> <?= $auto['km'] ?> Kilometros</ol>
                                        <ol>Color: <?= $auto['color'] ?></ol>
                                    </ul>
                                    <br>
                                    <a class="btn btn-theme-colored btn-sm btn-flat" href="#">Me Interesa</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="#" class="btn btn-block btn-lg p-20 btn-theme-colored"> VER TODOS LOS AUTOS EN VENTA</a>
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
                    <div class="owl-carousel-5col" data-dots="true">
                        <?php foreach ($marcas as $marca) : ?>
                            <div class=" item">
                                <div class="thumb">
                                    <img src="<?= Utils::isUrlValid($marca['image'], $pathMarca) ?>" 
                                         style="height: 100px;width: 150px" class="img-responsive" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>