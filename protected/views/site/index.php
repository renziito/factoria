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
<section class="bg-lighter">
    <div class="container pb-60">
        <div class="section-title">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-uppercase mb-0"></p>
                    <div class="title-icon">
                        <i class="flaticon-carrepair-tool-6 font-45"></i>
                    </div>

                    <h2 class="text-uppercase text-theme-colored title line-bottom">
                        Nuestros <span class="text-theme-color-2 font-weight-400">Servicios</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel-3col" data-dots="true">
                        <div class=" item">
                            <div class="thumb"> <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/1.jpg" class="img-fullwidth" alt=""> </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">Engine Diagnostic</h4>
                                <p>Lorem ipsum dolor sit amet, consectetu radipisi cing elitBeatae autem aperiam nequ quaera molestias voluptatibus harum ametipsa.</p>
                                <a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb"> <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/2.jpg" class="img-fullwidth" alt=""> </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">Wheel Alignment</h4>
                                <p>Lorem ipsum dolor sit amet, consectetu radipisi cing elitBeatae autem aperiam nequ quaera molestias voluptatibus harum ametipsa.</p>
                                <a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb"> <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/3.jpg" class="img-fullwidth" alt=""> </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">Oil Changing</h4>
                                <p>Lorem ipsum dolor sit amet, consectetu radipisi cing elitBeatae autem aperiam nequ quaera molestias voluptatibus harum ametipsa.</p>
                                <a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>
                            </div>
                        </div>
                        <div class=" item">
                            <div class="thumb"> <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/4.jpg" class="img-fullwidth" alt=""> </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">Brake Reparing</h4>
                                <p>Lorem ipsum dolor sit amet, consectetu radipisi cing elitBeatae autem aperiam nequ quaera molestias voluptatibus harum ametipsa.</p>
                                <a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb"> <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/5.jpg" class="img-fullwidth" alt=""> </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">Wash and Glassing</h4>
                                <p>Lorem ipsum dolor sit amet, consectetu radipisi cing elitBeatae autem aperiam nequ quaera molestias voluptatibus harum ametipsa.</p>
                                <a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb"> <img src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/practice/6.jpg" class="img-fullwidth" alt=""> </div>
                            <div class="bg-white p-20">
                                <h4 class="line-bottom text-uppercase font-weight-600 mt-0 mb-15">Complete Analysis</h4>
                                <p>Lorem ipsum dolor sit amet, consectetu radipisi cing elitBeatae autem aperiam nequ quaera molestias voluptatibus harum ametipsa.</p>
                                <a class="btn btn-theme-colored btn-sm btn-flat" href="#">Get Service ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: About -->
<section>
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-0 title line-bottom">Nosotros</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing eliter.
                        Corporis voluptatibu suscipit perferend dolor sit amet, 
                        consectetur adipisicing elit. Corporis voluptati buneque,
                        assumenda maxime aspernatur porro.<br>suscipit perferend 
                        aspernatur porro, quam suscipit quibusdam. Commodi eum.<br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing eliter.
                        Corporis voluptatibu suscipit perferend dolor sit amet, 
                        consectetur adipisicing elit. Corporis voluptati buneque,
                        assumenda maxime aspernatur porro.<br>suscipit perferend 
                        aspernatur porro, quam suscipit quibusdam. Commodi eum.
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


<!-- Section: Why Choose Us -->
<section class="bg-lighter">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-7">
                    <div class="pr-40">
                        <h3 class="text-uppercase text-theme-colored title line-bottom line-height-1 mt-0">Why Choose<span class="text-theme-color-2 font-weight-400"> Us ?</span></h3>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-30">
                                    <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                                        <i class="pe-7s-scissors text-white"></i>
                                    </a>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">Less CSS</h5>
                                        <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-30">
                                    <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                                        <i class="pe-7s-pen text-white"></i>
                                    </a>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">Special ShortCode</h5>
                                        <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-30">
                                    <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                                        <i class="pe-7s-tools text-white"></i>
                                    </a>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">Easy Customiz</h5>
                                        <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-30">
                                    <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                                        <i class="pe-7s-phone text-white"></i>
                                    </a>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">Responsive</h5>
                                        <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-30">
                                    <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                                        <i class="pe-7s-vector text-white"></i>
                                    </a>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">W3 validation</h5>
                                        <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box p-0 mb-30">
                                    <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip">
                                        <i class="pe-7s-light text-white"></i>
                                    </a>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">Retina Ready</h5>
                                        <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="text-uppercase text-theme-colored title line-bottom line-height-1 mt-0">What <span class="text-theme-color-2 font-weight-400">Clients Say ?</span></h3>
                    <div class="bxslider bx-nav-top">
                        <div class="testimonial bg-lightest p-20 mb-15">
                            <div class="comment">
                                <p><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                            </div>
                            <div class="content mt-20">
                                <div class="thumb pull-left flip">
                                    <img width="64" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/testimonials/s2.jpg" alt="" class="img-circle">
                                </div>
                                <div class="testimonials-details pull-left flip ml-20">
                                    <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                                    <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                                    <ul class="review_text list-inline">
                                        <li>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="testimonial bg-lightest p-20 mb-15">
                            <div class="comment">
                                <p><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                            </div>
                            <div class="content mt-20">
                                <div class="thumb pull-left flip">
                                    <img width="64" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/testimonials/s2.jpg" alt="" class="img-circle">
                                </div>
                                <div class="testimonials-details pull-left flip ml-20">
                                    <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                                    <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                                    <ul class="review_text list-inline">
                                        <li>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="testimonial bg-lightest p-20 mb-15">
                            <div class="comment">
                                <p><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                            </div>
                            <div class="content mt-20">
                                <div class="thumb pull-left flip">
                                    <img width="64" src="<?= Yii::app()->theme->getBaseUrl() ?>/bin/images/testimonials/s2.jpg" alt="" class="img-circle">
                                </div>
                                <div class="testimonials-details pull-left flip ml-20">
                                    <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                                    <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                                    <ul class="review_text list-inline">
                                        <li>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>